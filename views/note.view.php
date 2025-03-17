<?php

require "partials/head.php";
require "partials/nav.php";
// dd($notes);
?>

<!-- Home Page Body -->
<div class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
    <h1 class="text-3xl font-bold text-center mb-4">Note page</h1>
    <p>
        <a href="/notes" class="text-blue-600 hover:underline">
            < < back</a>
    </p>
    <p class="text-gray-700 text-center">
        <?= $note['body'] ?>
    </p>
</div>

<?php
require "partials/footer.php";
?>