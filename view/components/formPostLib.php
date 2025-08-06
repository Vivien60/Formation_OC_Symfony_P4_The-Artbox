<?php
function displayError($error) : void
{
    echo <<<ERROR
    <p class="form-error">{$error}</p>
    ERROR;
}

function displaySuccess() : void
{
    echo <<<VALIDATED
    <p class="form-success">Le formulaire a bien été rempli.</p>   
    VALIDATED;

}