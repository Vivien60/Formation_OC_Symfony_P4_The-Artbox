<?php
require_once "include/functions.php";
require_once "view/view.php";
require_once "include/oeuvres.php";

ob_start();
?>
<div id="liste-oeuvres">
    <?php
    foreach($oeuvres as $oeuvre) {
        echo articleFromOeuvre($oeuvre);
    }
    ?>
</div>
<?php
$mainContent = ob_get_clean();
echo render($mainContent);