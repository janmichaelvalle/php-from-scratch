<?php

require '../helpers.php';
require basePath('Router.php');

$router = new Router();

// Register routes
require basePath('routes.php');

// Get the request URI and method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

// Debugging: Output the URI and method
echo "Requested URI: " . $uri . "<br>";
echo "Requested Method: " . $method . "<br>";

// Route the request
$router->route($uri, $method);
