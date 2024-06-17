<?php

session_start();
require __DIR__ . '/../vendor/autoload.php';
require '../helpers.php';

use Framework\Router;


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
