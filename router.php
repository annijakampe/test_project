<?php

$routes  = [
    "/" => "controllers/index.php",
    "/about" => "controllers/about.php",
    "/contacts" => "controllers/contacts.php",
    "/notes" => "controllers/notes.php",
    "/note" => "controllers/note.php"
];

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

routeConrtoller($path, $routes);


function routeConrtoller($path, $routes)
{
    if (array_key_exists($path, $routes)) {
        require $routes[$path];
    } else {
        abort();
    }
}
