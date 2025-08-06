<?php
require_once "view/view.php";
require_once "include/oeuvre.php";

$oeuvreId = intval($_GET['id']);
if($oeuvreId < 1) {
    echo render("erreur");
    die();
}
$oeuvre = artwork($oeuvreId);

echo render(
        articleFromOeuvreWithDetails($oeuvre)
);