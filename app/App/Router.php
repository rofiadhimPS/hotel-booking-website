<?php

namespace ThorEngine\App;

class Router 
{
  private static array $routes = [];

  public static function add(string $method, string $path, string $controller, string $function): void
  {
    self::$routes[] = [
        'method' => strtoupper($method),
        'path' => $path,
        'controller' => $controller,
        'function' => $function 
    ];
  }

  public static function run(): void
  {
    $path = "/";
    if(isset($_SERVER['PATH_INFO'])) $path = $_SERVER['PATH_INFO'];
    $method = $_SERVER['REQUEST_METHOD'];

    foreach(self::$routes as $route) {
      $pattern = "#^" . $route['path'] ."$#";
      if($method == $route['method'] && preg_match($pattern, $path, $variables)){

        $controller = new $route['controller'];
        $function = $route['function'];
        
        array_shift($variables);
        call_user_func_array([$controller, $function], $variables);

        // or with spread operator
        // $controller->$function(...$variables);
        
        return;
      }
    }
    
    http_response_code(404);
    echo "CONTROLLER NOT FOUND";
  }
}