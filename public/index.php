<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../autoload.php';
require_once __DIR__ . '/../app/Routes/web.php';

use app\Core\Router;

/**echo "<pre>";
var_dump($_SERVER['REQUEST_URI']);
echo "</pre>";**/

$uri = str_replace('/boletos/public', '', $_SERVER['REQUEST_URI']);

Router::dispatch($uri, $_SERVER['REQUEST_METHOD']);
