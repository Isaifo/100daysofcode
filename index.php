<?php

require "functions.php";



$uri = parse_url($_SERVER['REQUEST_URI']) ['path'];

//dd(parse_url($uri));


$routes = [

    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/about.php'


];


function routeToController($uri, $routes) {


    if (array_key_exists($uri, $routes)) {

        require $routes[$uri];
     
    } else {
    
    
     abort();
    
    
    }

    routeToController($uri, $routes);
    

}

function abort($code = 404)
{
    http_response_code($code);

    require "views/{$code}.php";

    die();
}



?>