<?php
function articleFromOeuvre($oeuvre)
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
    return <<<IMAGE
    <img src="img/{$oeuvre['image']}" alt="{$oeuvre['nom']}">
    IMAGE;
}