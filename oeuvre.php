<?php
require_once "include/functions.php";
require_once "include/oeuvres.php";
$oeuvreId = intval($_GET['id']);
$oeuvre = null;
foreach($oeuvres as $oeuvreInCollection) {
    if($oeuvreInCollection['id'] === $oeuvreId) {
        $oeuvre = $oeuvreInCollection;
        break;
    }
}
?>
<!doctype html>
<html lang="fr">
<head>
<?php
require_once "include/headerHTML.php";
?>
</head>
<body>
<?php
	require_once "include/header.php";
?>
<main>
    <?php
        echo articleFromOeuvreWithDetails($oeuvre);
    ?>
</main>
<?php
    require_once "include/footer.php";
?>
</body>
</html>
