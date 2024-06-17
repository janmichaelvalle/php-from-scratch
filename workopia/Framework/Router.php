<?php

namespace Framework;

use App\Controllers\ErrorController;

class Router {
  protected $routes = [];

  /**
   * Add a new route
   *
   * @param $method
   * @param $uri
   * @param $action
   * @return void
   */
  public function registerRoute($method, $uri, $action) {
    list($controller, $controllerMethod) = explode('@', $action);

    $this->routes[] = [
      'method' => $method,
      'uri' => $uri,
      'controller' => $controller,
      'controllerMethod' => $controllerMethod
    ];
  }
  /** 
   * Add a GET route
   * 
   * @param string $uri
   * @param string controller
   * @return void
   */
  public function get($uri, $controller) {
    $this->registerRoute('GET', $uri, $controller);
  }
  /** 
   * Add a POST route
   * 
   * @param string $uri
   * @param string controller
   * @return void
   */
  public function post($uri, $controller) {
    $this->registerRoute('POST', $uri, $controller);
  }

  /** 
   * Add a PUT route
   * 
   * @param string $uri
   * @param string controller
   * @return void
   */
  public function put($uri, $controller) {
    $this->registerRoute('PUT', $uri, $controller);

  }

  /** 
   * Add a DELETE route
   * 
   * @param string $uri
   * @param string controller
   * @return void
   */
  public function delete($uri, $controller) {
    $this->registerRoute('DELETE', $uri, $controller);
  }



  /** 
   * Route the request
   * 
   * @param string $uri
   * @param string $method
   * @param void
   */
  public function route($uri){
    $requestMethod = $_SERVER['REQUEST_METHOD'];

    // Check for _method input
    if($requestMethod === 'POST' && isset($_POST['_method'])) {
      // Override the request method with the value of the _method
      $requestMethod = strtoupper($_POST['_method']);
    }
    
    foreach($this->routes as $route){
      // Split the current URI into segments
      $uriSegments = explode('/', trim($uri, '/'));

      // Split the route URI into segments
      $routeSegments = explode('/', trim($route['uri'], '/'));

      $match = true;

      // SEGMENT COUNT & METHOD CHECK: Check if the number  of segments matches
      if(count($uriSegments) === count($routeSegments) && strtoupper($route['method']) === $requestMethod) {
        $params = [];
        $match = true;

        // SEGMENT BY SEGMENT COMPARISON
        for($i = 0; $i < count($uriSegments); $i++) {
          // If the URI's do not match and there is no param
          // The argument inside preg_match is looking text inside a the curly braces
          if ($routeSegments[$i] !== $uriSegments[$i] && !preg_match('/\{(.+?)\}/', $routeSegments[$i])) 
          {
            $match = false;
            break;

          }
          // Check for the param and add to $params array
          if (preg_match('/\{(.+?)\}/', $routeSegments[$i], $matches)) {
            $params[$matches[1]] = $uriSegments[$i];
          }
        }

        if($match) {
        // Extract controller and controller method
        $controller = 'App\\Controllers\\' . $route['controller'];
        $controllerMethod = $route['controllerMethod'];

        // Instantiate the controller and call the method
        $controllerInstance = new $controller();
        $controllerInstance->$controllerMethod($params);
        return;          
        }
      }
    }
    ErrorController::notFound();
  }

}