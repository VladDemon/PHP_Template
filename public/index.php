<?php
require __DIR__ . '/../vendor/autoload.php';
include $_SERVER['DOCUMENT_ROOT']. "/../config.php";





$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


$routes = [
    '/' => 'HomeController@index',
    '/about' => 'PageController@about',
];


if (array_key_exists($uri, $routes)) {
    [$controller, $method] = explode('@', $routes[$uri]);
    $controller = "App\\Controller\\{$controller}";
    
    if (class_exists($controller) && method_exists($controller, $method)) {
        $instance = new $controller();
        echo $instance->$method();
    } else {
        http_response_code(404);
        echo "Controller or method not found!";
    }
} else {
    http_response_code(404);
    echo "Page not found!";
}

?>