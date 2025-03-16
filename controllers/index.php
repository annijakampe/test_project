<?php
// Izvada servera un pieprasījuma informāciju.
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

// Parāda pašreizējā pieprasījuma URL ceļu.
// echo $_SERVER["REQUEST_URI"];

require "functions.php";

$page = "index";

require "views/index.view.php";
