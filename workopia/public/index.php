<?php

require '../helpers.php';
require basePath('Database.php');
require basePath('Router.php');

// Instantiate the router
$router = new Router();

// Get routes
require basePath('routes.php');

// Get the current URI and HTTP method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

// Debugging: Output the URI and method
echo "Requested URI: " . $uri . "<br>";
echo "Requested Method: " . $method . "<br>";

// Route the request
$router->route($uri, $method);
