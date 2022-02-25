<?php
require 'config.php';

function connect($host, $db, $user, $password) {
     $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

    try {
        $option = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $pdo = new PDO($dsn, $user, $password, $option);
        $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_WARNING);
        return $pdo;
        
    } catch (PDOExeption $e) {
        echo $e->getMessage();
    }

}

return connect($host, $db, $user, $password);