<?php
namespace App\Core;
use Dotenv\Dotenv;
use PDOException;
use PDO;

class Database {
    private static ?PDO $pdo = null;

    public static function connection() {
        $dotenv = Dotenv::createImmutable(__DIR__.'/../../');
        $dotenv->load();
        if (self::$pdo === null) {

            try {
                $dsn = "pgsql:host=".$_ENV['SERVERNAME'].";port=".$_ENV['PORT'].";dbname=".$_ENV['DBNAME']."";
                self::$pdo = new PDO($dsn, $_ENV['USERNAME'], $_ENV['PASSWORD']);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Error connection: " . $e->getMessage());
            }
        }
        return self::$pdo;
    }
}