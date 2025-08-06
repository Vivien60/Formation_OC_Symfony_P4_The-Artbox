<?php
require_once "conf/conf.inc.php";
require_once "view/view.php";

ob_start();
require_once "view/components/formRegisterArtwork.php";
$mainContent = ob_get_clean();
echo render($mainContent);