<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        $title = "Inicio";
        include __DIR__ . '/../Views/home/index.php';
    }
}
