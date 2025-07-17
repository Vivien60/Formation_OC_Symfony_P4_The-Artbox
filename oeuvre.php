<?php
require_once "include/functions.php";
require_once "view/view.php";
require_once "include/oeuvres.php";
$oeuvreId = intval($_GET['id']);
$oeuvre = null;
foreach($oeuvres as $oeuvreInCollection) {
    if($oeuvreInCollection['id'] === $oeuvreId) {
        $oeuvre = $oeuvreInCollection;
        break;
    }
}

echo render(
        articleFromOeuvreWithDetails($oeuvre)
);