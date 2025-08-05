<?php
require_once "view/view.php";
require_once "include/oeuvre.php";

$oeuvreId = intval($_GET['id']);
$oeuvre = artwork($oeuvreId);

echo render(
        articleFromOeuvreWithDetails($oeuvre)
);