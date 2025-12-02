<?php
require_once '../vendor/autoload.php';

require_once '../App/Routes/web.php';

use App\Core\Router;

Router::dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
