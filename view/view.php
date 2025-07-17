<?php
function render($main)
{
    ob_start();
    require_once "footer.php";
    $footer = ob_get_clean();
    ob_start();
    require_once "header.php";
    $header = ob_get_clean();
    ob_start();
    require_once "headerHTML.php";
    $headerHTML = ob_get_clean();

    return <<<VIEW
        <!doctype html>
        <html lang="fr">
        <head>
            $headerHTML
        </head>
        <body>
        $header
        <main>
           $main
        </main>
        $footer
        </body>
        </html>
        VIEW;
}