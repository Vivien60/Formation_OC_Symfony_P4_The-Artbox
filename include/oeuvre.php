<?php
require_once "connectToBDD.php";

function artwork(int $id) : ?array
{
    if(empty($id))
        return null;
    $sql = 'SELECT oeuvre_id as id, nom, artiste, image, description FROM oeuvre WHERE oeuvre_id=:id';
    $artworkStatement = request($sql, ['id' => $id]);
    return $artworkStatement->fetch();
}

function allArtworks() : ?array
{
    $sql = 'SELECT oeuvre_id as id, nom, artiste, image, description FROM oeuvre';
    $artworkStatement = request($sql);
    return $artworkStatement->fetchAll();
}

function request(string $sql, array $params = []): PDOStatement|false
{
    $mysqlClient = connectToBDD();
    $statement = $mysqlClient->prepare($sql);
    $statement->execute($params);
    return $statement;
}