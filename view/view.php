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

function htmlArticleFromArtwork($oeuvre)
{
    $imageHTML = imageFromOeuvre($oeuvre);
    return <<<ARTICLE
    <article class="oeuvre">
        <a href="oeuvre.php?id={$oeuvre['id']}">
            {$imageHTML}
            <h2>{$oeuvre['nom']}</h2>
            <p class="description">{$oeuvre['artiste']}</p>
        </a>
    </article>
    ARTICLE;
}

function articleFromOeuvreWithDetails($oeuvre)
{
    $imageHTML = imageFromOeuvre($oeuvre);
    return <<<DETAIL
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            {$imageHTML}
        </div>
        <div id="contenu-oeuvre">
            <h1>{$oeuvre['nom']}</h1>
            <p class="description">{$oeuvre['artiste']}</p>
            <p class="description-complete">
                {$oeuvre['description']}
            </p>
        </div>
    </article>
DETAIL;

}

function imageFromOeuvre($oeuvre)
{
    $scheme = parse_url($oeuvre['image'], PHP_URL_SCHEME);
    if(!empty($scheme) && str_starts_with($scheme, 'http')) {
        $uri = $oeuvre['image'];
    } else {
        $uri = "img/{$oeuvre['image']}";
    }
    return <<<IMAGE
    <img src="{$uri}" alt="{$oeuvre['nom']}">
    IMAGE;
}