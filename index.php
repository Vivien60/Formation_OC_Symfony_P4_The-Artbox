<?php
require_once "include/functions.php";
require_once "include/oeuvres.php";
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
        <div id="liste-oeuvres">
        <?php
            foreach($oeuvres as $oeuvre) {
                echo articleFromOeuvre($oeuvre);
            }
        ?>
        </div>
    </main>
    <?php
        require_once "include/footer.php";
    ?>
</body>
</html>