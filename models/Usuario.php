<?php

namespace Model;

class Usuario extends ActiveRecord
{
    // Base de Datos
    protected static $tabla = 'usuario';
    protected static $columnasDB = ['idusuario', 'nombre', 'contrasena'];

    public $idusuario;
    public $nombre;
    public $contrasena;

    public function __construct($args = [])
    {
        $this->idusuario = $args['idusuario'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->contrasena = $args['contrasena'] ?? '';
    }

    // Mensajes de validación
    public function validarUsuario()
    {
        if (!$this->nombre) {
            self::$alertas['error'][] = 'Usuario Obligatorio';
        }
        if (!$this->contrasena) {
            self::$alertas['error'][] = 'Contraseña Obligatoria';
        }

        return self::$alertas;
    }

    public function comprobarPassword($password)
    {
        $resultado = password_verify($password, $this->contrasena);

        if (!$resultado) {
            self::$alertas['error'][] = 'Contraseña Incorrecta';
        } else {
            return true;
        }
    }
}
