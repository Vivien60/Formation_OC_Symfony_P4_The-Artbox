<?php
function connectToBDD() : PDO {
    try {
        $dsn = 'mysql:host=localhost;dbname=artbox;charset=utf8';
        $username = 'phpmyadmin';
        $password = 'none';
        $mysqlClient = new PDO(
            $dsn,
            $username,
            $password,
        );
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    return $mysqlClient;
}