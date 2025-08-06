<?php
require_once "conf/conf.inc.php";
require_once "view/view.php";

session_start();
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));

ob_start();
require_once "view/components/formRegisterArtwork.php";
$mainContent = ob_get_clean();
echo render($mainContent);