<?php

namespace Controllers;

use Model\Afiliado;
use Model\Promotor;

class APIController
{
    public static function promotores()
    {
        $id_ruta = 'id_ruta';
        $promotores = Promotor::notNull($id_ruta);

        echo json_encode($promotores);
    }
    public static function afiliados()
    {
        $afiliados = Afiliado::all();

        echo json_encode($afiliados);
    }
}
