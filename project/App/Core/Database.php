<?php
namespace App\Core;

use PDO;
use PDOException;

class Database {
    private static ?PDO $pdo = null;

    public static function connection() {
        if (self::$pdo === null) {
            $servername = 'postgres_container';
            $username   = "postgres";
            $password   = "anwar36flow";
            $dbname     = "mvc_db";
            $port       = "5432";

            try {
                $dsn = "pgsql:host=$servername;port=$port;dbname=$dbname";
                self::$pdo = new PDO($dsn, $username, $password);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Error connection: " . $e->getMessage());
            }
        }
        return self::$pdo;
    }
}
