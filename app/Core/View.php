<?php
namespace app\Core;

class View {
    public static function render($view, $data = []) {
        extract($data);

        // Captura el contenido de la vista
        ob_start();
        require __DIR__ . '/../Views/' . $view . '.php';
        $content = ob_get_clean();

        // Carga el layout principal que incluye header y footer
        require __DIR__ . '/../Views/layouts/index.php';
    }
}
