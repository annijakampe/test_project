<?php

require "partials/head.php";
require "partials/nav.php";
// dd($notes);
?>

<!-- Home Page Body -->
<div class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
    <h1 class="text-3xl font-bold text-center mb-4">Notes page</h1>
    <p class="text-gray-700 text-center">
        <!-- Izvada to kas atrodas db, šajā gadījuma notes un ir iespēja arū uzspiest uz dota notes-->
        <?php foreach ($notes as $note) : ?>
            <li>
                <a href="/note?id=<?= $note['id'] ?>" class="text-blue-600 hover:underline">
                    <?= $note['body'] ?>
                </a>
            </li>
        <?php endforeach; ?>



    </p>
</div>

<?php
require "partials/footer.php";
?>