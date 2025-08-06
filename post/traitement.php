<?php
require_once "../conf/conf.inc.php";
require_once "../view/view.php";
require_once "../include/connectToBDD.php";
require_once "../include/oeuvre.php";
require_once "../view/components/formPostLib.php";

ob_start();
$title = htmlspecialchars($_POST['title']);
$artist = htmlspecialchars($_POST['artist']);
$desc = htmlspecialchars($_POST['description']);
$imagUrl = htmlspecialchars(filter_input(INPUT_POST, 'image_link', FILTER_SANITIZE_URL));
var_dump($imagUrl);
$hasError = false;
if(empty($title)) {
    $hasError = true;
    displayError("Le titre est absent");
}
if(empty($artist)) {
    $hasError = true;
    displayError("Le nom de l'artiste est absent");
}
if(!empty($desc) && strlen($desc)<3) {
    $hasError = true;
    displayError("La description est trop courte. Elle doit contenir au moins 3 caractères.");
}
if(empty($artist)) {
    $hasError = true;
    displayError("Le nom de l'artiste est absent");
}
if(!empty($imagUrl)) {
    $urlScheme = parse_url($imagUrl, PHP_URL_SCHEME);
    var_dump($urlScheme);
    if(!($urlScheme === 'http' || $urlScheme === 'https')) {
        $hasError = true;
        displayError("L'URL de l'image est incorrecte");
    }
}
if(!$hasError) {
    try {
        $sql = 'INSERT INTO oeuvre (nom, artiste, description, image) 
                VALUES (:nom, :artist, :description, :image)';
        $statement = request($sql,
                            [
                                'nom' => $title,
                                'artist' => $artist,
                                'description' => $desc,
                                'image' => $imagUrl
                            ]);

        displaySuccess();
    } catch(Exception $e) {
        displayError($e->getMessage());
    }
}
$mainContent = ob_get_clean();
echo render($mainContent);