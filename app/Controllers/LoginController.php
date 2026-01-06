<?php
namespace app\Controllers;

use app\Core\View;

class LoginController {

    public function login() {
        View::render('usuarios/login', ['title' => 'Login']);
    } 
}
