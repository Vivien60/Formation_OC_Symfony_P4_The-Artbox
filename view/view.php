<?php
function render($main)
{
    ob_start();
    require_once "components/footer.php";
    $footer = ob_get_clean();
    require_once "components/header.php";
    $header = ob_get_clean();
    require_once "components/headerHTML.php";
    $headerHTML = ob_get_clean();
    require_once "templates/template.php";
    $html = ob_get_clean();
    return <<<VIEW
       $html
    VIEW;
}