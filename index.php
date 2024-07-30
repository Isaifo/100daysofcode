<?php

require "functions.php";

//require "router.php";


// connect database

$dsn = "mysql:host=bvnb3shbn5ecplhduwam-mysql.services.clever-cloud.com;port=3306;dbname=bvnb3shbn5ecplhduwam;password=mD2Cy4nCgLui1IDboGno;charset=utf8mb4;";
$pdo = new PDO($dsn, 'uzfaevabijyp9ghr');

$statement = $pdo->prepare("SELECT * FROM posts");

$statement-> execute();

$posts = $statement->fetchAll();

dd($posts);

?>