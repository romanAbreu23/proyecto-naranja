<?php

namespace Model;

class Promotor extends ActiveRecord
{
    // Base de datos
    protected static $tabla = 'promotor';
    protected static $columnasDB = [
        'id_promotor',
        'nombre',
        'id_seccion',
        'id_ruta'
    ];

    public $id_promotor;
    public $nombre;
    public $id_seccion;
    public $id_ruta;

    public function __construct($args = [])
    {
        $this->id_promotor = $args['id_promotor'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->id_seccion = $args['id_seccion'] ?? null;
        $this->id_ruta = $args['id_ruta'] ?? null;
    }
}
