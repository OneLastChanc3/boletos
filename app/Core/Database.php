<?php

namespace app\Core;

use PDO;
use PDOException;

class Database
{       
        private static $host = 'localhost';
        private static $db = 'boletos';
        private static $user = 'root';
        private static $password = '' ;
        private static $charset = 'utf8mb4';

    public static function connect()
    {
        try {
            $dsn = "mysql:host=" . self::$host . ";dbname=" . self::$db . ";charset=" . self::$charset;

            return new PDO($dsn, self::$user, self::$password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);

        } catch (PDOException $e) {
            die("Error de conexión a la BD: " . $e->getMessage());
        }
    }
}
