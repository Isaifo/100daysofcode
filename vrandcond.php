<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body {
            
    display: grid;
    place-items: center;
    height: 100vh;
    margin: 0;
    font-family: sans-serif;

        }
        
    </style>
</head>
<body>
    <h1>

   
    <?php
    $name = "dark matter";
    $read = false;

    if ($read){
        $message = "you have read $name";
       
    } else {
        $message = "you have not read $name";
    }

    ?>

   <h1>
//<?php echo $message; ?>

   <?= $message; ?>

   </h1>
    

   
    </h1>
</body>
</html>