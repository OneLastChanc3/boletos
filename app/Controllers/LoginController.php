<?php
namespace app\Controllers;

use app\Core\View;

class LoginController {

    // Mostrar página de login
    public function login() {
        // Cargamos la vista login.php dentro de Views/Usuarios
        View::render('usuarios/login', ['title' => 'Login']);
    }
}
