<?php

namespace app\Controllers;

use app\Core\View;

class ProductsController
{
    public function productos()
    {
        View::render('productos/productos', ['title' => 'Productos']);
    }
}
