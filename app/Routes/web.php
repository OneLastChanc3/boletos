<?php

use app\Core\Router;
use app\Controllers\HomeController;
use app\Controllers\LoginController;
use app\Controllers\ProductsController;
use app\Controllers\RegisterController;

Router::get('/', [HomeController::class, 'index']);
Router::get('/login', [LoginController::class, 'login']);
Router::get('/register', [RegisterController::class, 'register']);
Router::post('/register', [RegisterController::class, 'register']);
Router::get('/productos', [ProductsController::class, 'productos']);



