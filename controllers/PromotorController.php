<?php

namespace Controllers;

use MVC\Router;
use Model\Afiliado;

class PromotorController
{
    public static function index(Router $router)
    {

        session_start();

        isAuth(); // Función que revisa que una sesión este iniciada

        $router->render('app/index', [
            'nombre' => $_SESSION['nombre']
        ]);
    }

    public static function tablaAfiliados(Router $router)
    {

        session_start();

        isAuth(); // Función que revisa que una sesión este iniciada

        $promotor = s($_GET['promotor']);

        $afiliados = Afiliado::whereVarios('promotor', $promotor);

        if (!$afiliados) {
            // Mostrar mensaje de error
            Afiliado::setAlerta('error', 'Este promotor aun no cuenta con afiliados registrados');

            // Obtener alertas
            $alertas = Afiliado::getAlertas();

            $router->render('app/afiliados', [
                'nombre' => $_SESSION['nombre'],
                'alertas' => $alertas
            ]);
        } else {

            $router->render('app/afiliados', [
                'nombre' => $_SESSION['nombre'],
                'afilidos' => $afiliados,
                'promotor' => $promotor
            ]);
        }
    }
}
