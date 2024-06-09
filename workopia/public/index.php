<?php

require __DIR__ . '/../vendor/autoload.php';
require '../helpers.php';

use Framework\Router;


// require basePath('Framework/Database.php');
// require basePath('Framework/Router.php');

// spl_autoload_register(function ($class) {
//   $path = basePath('Framework/' . $class . '.php');
//   if(file_exists($path)) {
//     require $path;
//   } 
// });

// Instantiate the router
$router = new Router();

// Get routes
require basePath('routes.php');

// Get the current URI and HTTP method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);



// Debugging: Output the URI and method
echo "Requested URI: " . $uri . "<br>";
// echo "Requested Method: " . $method . "<br>";

// Route the request
$router->route($uri);
