<?php

namespace app\Controllers;

use app\Core\View;
use app\Core\Database;

class RegisterController
{
    public function register()
    {

       if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            return View::render('usuarios/register', [
                'title' => 'Registro'
            ]);
        }

        // 2️⃣ PROCESAR REGISTRO (POST)
        $username = trim($_POST['username'] ?? '');
        $correo   = trim($_POST['correo'] ?? '');
        $password = $_POST['password'] ?? '';

        // 3️⃣ VALIDACIÓN BÁSICA
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $username = trim($_POST['username']);
        $correo   = trim($_POST['correo']);
        $password = $_POST['password'];

          if (!$username || !$correo || !$password) {
                return View::render('usuarios/register', [
                    'error' => 'Todos los campos son obligatorios'
                ]);
            }
            
        $db = Database::connect();

        $stmt = $db->prepare(
            "INSERT INTO usuarios (usuario, correo, contraseña)
             VALUES (:username, :correo, :password)"
        );

        $stmt->execute([
            'username' => $username,
            'correo'   => $correo,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ]);

        header('Location: /boletos/public/login');
        exit;
    }


        View::render('usuarios/register', ['title' => 'resgister']);
    }
}
