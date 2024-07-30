<?php

require "functions.php";

//require "router.php";


// connect database

$host = 'bvnb3shbn5ecplhduwam-mysql.services.clever-cloud.com';
$db = 'bvnb3shbn5ecplhduwam';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host; dbname=$db; charset=$charset";
$username = 'uzfaevabijyp9ghr';
$password = 'mD2Cy4nCgLui1IDboGno';



try {
    // cria uma nova instância PDO
    $pdo = new PDO($dsn, $username, $password);
    // define o modo de erro PDO para exceção
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida!<br>";

  
    $statement = $pdo->prepare("SELECT * FROM posts");

    
    $statement->execute();

    
    $posts = $statement->fetchAll(PDO::FETCH_ASSOC);

    
    echo "<pre>";
    print_r($posts);
    echo "</pre>";

} catch (PDOException $e) {
    
    echo "Conexão falhou: " . $e->getMessage();
}



//require "controllers/index.php";
?>