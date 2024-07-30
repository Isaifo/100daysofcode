<?php

require "functions.php";

//require "router.php";

require "Database.php";

$db = new Database();

$posts = $db->query("SELECT * FROM posts where id > 1");

foreach ($posts as $post) {
    echo "<li>" .$post['title'] . "</li>";
}





//require "controllers/index.php";
