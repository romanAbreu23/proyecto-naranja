<?php

namespace Model;

class Afiliado extends ActiveRecord
{
    // Base de datos
    protected static $tabla = 'afiliados';
    protected static $columnasDB = [
        'id_afiliado',
        'estatus',
        'nombres',
        'ap',
        'am',
        'calle',
        'numext',
        'numint',
        'localidad',
        'telefono',
        'fuente',
        'secion',
        'promotor',
        'seccional',
        'coordz',
        'ruta',
        'padrino',
    ];

    public $id_afiliado;
    public $estatus;
    public $nombres;
    public $ap;
    public $am;
    public $calle;
    public $numext;
    public $numint;
    public $localidad;
    public $telefono;
    public $fuente;
    public $seccion;
    public $promotor;
    public $seccional;
    public $coordz;
    public $ruta;
    public $padrino;

    public function __construct($args = [])
    {
        $this->id_afiliado = $args['id_afiliado'] ?? null;
        $this->estatus = $args['estatus'] ?? '';
        $this->nombres = $args['nombre'] ?? '';
        $this->ap = $args['ap'] ?? '';
        $this->am = $args['am'] ?? '';
        $this->calle = $args['calle'] ?? '';
        $this->numext = $args['numext'] ?? '';
        $this->numint = $args['numint'] ?? '';
        $this->localidad = $args['localidad'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->fuente = $args['fuente'] ?? '';
        $this->seccion = $args['seccion'] ?? '';
        $this->promotor = $args['promotor'] ?? '';
        $this->seccional = $args['seccional'] ?? '';
        $this->coordz = $args['coordz'] ?? '';
        $this->ruta = $args['ruta'] ?? '';
        $this->padrino = $args['padrino'] ?? '';
    }

    // Revisar los afiliados del promotor
    public function verificarAfiliados()
    {
        $query = "SELECT * FROM " . self::$tabla . " WHERE promotor = '" . $this->promotor . "';";

        $resultado = self::$db->query($query);

        // if ($resultado->num_rows) {
        //     self::$alertas['error'][] = 'El Usuario ya esta registrado';
        // }
        return $resultado;
    } /* existeUsuario */
}
