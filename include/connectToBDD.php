<?php
require_once "conf/conf.inc.php";

function connectToBDD() : PDO {
    try {
        $dsn = 'mysql:host='.BDD_HOST.';dbname='.BDD_NAME.';charset=utf8';
        $mysqlClient = new PDO(
            $dsn,
            BDD_USER,
            BDD_PWD,
        );
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    return $mysqlClient;
}