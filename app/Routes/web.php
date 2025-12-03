<?php

use app\Core\Router;
use app\Controllers\HomeController;
use app\Controllers\LoginController;
use app\Controllers\ProductsController;

Router::get('/', [HomeController::class, 'index']);
Router::get('/login', [LoginController::class, 'login']);
Router::get('/productos', [ProductsController::class, 'productos']);


