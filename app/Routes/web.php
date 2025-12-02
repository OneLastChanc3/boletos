<?php

use app\Core\Router;
use app\Controllers\HomeController;
use app\Controllers\LoginController;

Router::get('/', [HomeController::class, 'index']);
Router::get('/login', [LoginController::class, 'login']);


