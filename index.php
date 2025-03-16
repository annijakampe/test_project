<?php

$path = $_SERVER["REQUEST_URI"];

$routes  = [
    "/" => "controllers/index.php",
    "/about" => "controllers/about.php",
    "/contacts" => "controllers/contacts.php"
];

require $routes[$path];
