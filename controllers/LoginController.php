<?php

namespace Controllers;

use MVC\Router;
use Model\Usuario;

class LoginController
{
    public static function login(Router $router)
    {
        $alertas = [];

        $auth = new Usuario;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $auth = new Usuario($_POST);
            $alertas = $auth->validarUsuario();

            if (empty($alertas)) {
                // Comprobar que exista el usuario
                $usuario = Usuario::where('nombre', $auth->nombre);

                if ($usuario) {
                    // Verificar el password
                    $contraseña = Usuario::where('contrasena', $auth->contrasena);
                    if ($contraseña) {
                        // Autenticar al usuario
                        session_start();

                        $_SESSION['idusuario'] = $usuario->idusuario;
                        $_SESSION['nombre'] = $usuario->nombre;
                        $_SESSION['login'] = true;

                        header('Location: /inicio');
                    } else {
                        Usuario::setAlerta('error', 'Contraseña Incorrecta');
                    }
                } else {
                    Usuario::setAlerta('error', 'Usuario no Encontrado');
                }
            }
        }

        $alertas = Usuario::getAlertas();

        $router->render('auth/login', [
            'alertas' => $alertas,
            'auth' => $auth
        ]);
    }

    public static function logout()
    {
        session_start();
        $_SESSION = [];
        header('Location: /');
    }
}
