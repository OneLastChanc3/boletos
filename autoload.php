<?php

spl_autoload_register(function ($class) {

    // Reemplaza namespace con ruta real
    $class = str_replace('\\', '/', $class);

    // Construye ruta absoluta
    $file = __DIR__ . '/src/' . $class . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});
