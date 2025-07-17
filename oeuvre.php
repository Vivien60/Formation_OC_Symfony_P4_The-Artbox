<?php
require_once "include/functions.php";
require_once "include/oeuvres.php";
$oeuvreId = intval($_GET['id']);
$oeuvre = $oeuvres[$oeuvreId];
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
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
