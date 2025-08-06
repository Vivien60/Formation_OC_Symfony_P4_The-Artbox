<?php
require_once "../conf/conf.inc.php";
require_once "../view/view.php";

ob_start();
var_dump($_POST);
$mainContent = ob_get_clean();
echo render($mainContent);