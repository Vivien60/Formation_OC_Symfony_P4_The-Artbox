<?php
require_once "view/view.php";
require_once "include/oeuvre.php";

ob_start();
?>
<div id="liste-oeuvres">
    <?php
    foreach(allArtworks() as $oeuvre) {
        echo htmlArticleFromArtwork($oeuvre);
    }
    ?>
</div>
<?php
$mainContent = ob_get_clean();
echo render($mainContent);