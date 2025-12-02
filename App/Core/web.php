<?php

use App\Core\Router;
use App\Controllers\HomeController;

// Página principal
Router::get('/', [HomeController::class, 'index']);

// Ruta con parámetro
Router::get('/saludo/{name}', [HomeController::class, 'saludo']);
