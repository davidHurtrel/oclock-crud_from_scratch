<?php

namespace App\Utils;

use PDO;

class Database
{
    private PDO $dbh;
    private static Database $instance;

    private function __construct()
    {
        $configData = parse_ini_file(__DIR__ . '/../../config/config.ini');

        try {
            $this->dbh = new PDO(
                "mysql:host={$configData['DB_HOST']};dbname={$configData['DB_NAME']};charset=utf8",
                $configData['DB_USER'],
                $configData['DB_PASS'],
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING) // Affiche les erreurs SQL à l'écran
            );
        } catch (\Exception $exception) {
            echo 'Erreur de connexion...<br>';
            echo $exception->getMessage() . '<br>';
            echo '<pre>';
            echo $exception->getTraceAsString();
            echo '</pre>';
            exit;
        }
    }

    /**
     * @return PDO
     */
    public static function getPDO(): PDO
    {
        if (empty(self::$instance)) {
            self::$instance = new Database();
        }
        return self::$instance->dbh;
    }
}
