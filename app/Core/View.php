<?php
namespace app\Core;

class View {
    public static function render($path, $data = []) {
        extract($data); // convierte $data en variables
        require __DIR__ . '/../Views/' . $path . '.php';
    }
}
