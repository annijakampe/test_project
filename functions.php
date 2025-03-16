<?php

//Ar doto funkciju, ( nav.php ) mēs aizvietojam šo kodu: <?= $_SERVER["REQUEST_URI"] === '/about.php' ? ar šo: <?= urLIs('/about.php') ?. kods tagad ir īsāks un skaidrāks.
function urLIs($valse)
{
    return $_SERVER["REQUEST_URI"] === $valse;
}

// Ar šo funkciju mēs varam izsaukt kļūdas lapu, ja kāda lapa nav atrasta.
function abort($code = 404)
{
    http_response_code($code);
    require "views/{$code}.php";
    die();
}
