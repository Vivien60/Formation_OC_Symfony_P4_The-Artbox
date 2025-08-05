<?php
require_once "connectToBDD.php";

function artwork(int $id) {
    $mysqlClient = connectToBDD();
    $sql = 'SELECT oeuvre_id as id, nom, artiste, image, description FROM oeuvre WHERE oeuvre_id='.$id;
    $artworkStatement = $mysqlClient->prepare($sql);
    $artworkStatement->execute();
    return $artworkStatement->fetch();
}

function allArtworks() {
    $mysqlClient = connectToBDD();

    $artworkStatement = $mysqlClient->prepare('SELECT oeuvre_id as id, nom, artiste, image, description FROM oeuvre');
    $artworkStatement->execute();
    return $artworkStatement->fetchAll();
}