<?php

namespace app\Controllers;

use app\Core\View;

class RegisterController
{
    public function register()
    {
        View::render('usuarios/register', ['title' => 'resgister']);
    }
}
