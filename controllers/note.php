<?php

$config = require "config.php";

$db = new Database($config['database']);

$page = "Note";

$userId = 2;


$sql = 'SELECT * FROM notes WHERE user_id = {$userID} AND id = :id';
$note = $db->query($sql, ['id' => $_GET['id']])->fetch();

if ($note['user_id'] !== $userID) {
    abort(403);
}

// dd($note);

if (! $note) {
    abort();
}

// $userID

require "views/note.view.php";
