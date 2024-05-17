<?php

require_once __DIR__ . '/../includes/app.php';

use Controllers\APIController;
use Controllers\LoginController;
use Controllers\PromotorController;
use MVC\Router;

$router = new Router();

// Iniciar Sesión
$router->get('/', [LoginController::class, 'login']);
$router->post('/', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

// Areá Privada
$router->get('/inicio', [PromotorController::class, 'index']);
$router->get('/afiliados', [PromotorController::class, 'tablaAfiliados']);

// API de Promotores
$router->get('/api/promotores', [APIController::class, 'promotores']);
$router->get('/api/afiliados', [APIController::class, 'afiliados']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();
