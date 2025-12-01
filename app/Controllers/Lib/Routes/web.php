<?php

use Lib\Route;

Route::get('/', function() {
    echo 'hola mundo';
});
Route::get('/contact', function() {
    echo 'hola desde la pagina contacto';
});

Route::dispatch();