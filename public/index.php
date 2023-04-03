<?php

session_start();

const BASE_PATH = __DIR__ . '/../';
require BASE_PATH . 'functions.php';    


$routes = require base_path('routes.php');

// var_dump($_SERVER);
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// dd($_SERVER);
if(array_key_exists($uri, $routes)){
    require base_path($routes[$uri]);
}else{
    echo "404 Not Found";
}

