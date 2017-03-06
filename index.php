<?php

require __DIR__ . '/vender/autoload.php'

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

$config['displayErrorDetails'] = true;
$config['addContentLengthHeader'] = true;
$config["determineRouteBeforeAppMiddleware"] = true;

// Initial Slim Routing App with OAuth2 Implementation
$app = new \Slim\App([
    "settings" => $config
]);

// var_dump($app);
// test

// Middleware (1) : Set 'Content-Type', 'application/json; charset=utf-8' Headers
// no longer used, setted below with CORS middleware
$set_header = function ($request, $response, $next) {
    $newResponse = $response->withHeader('Content-Type', 'application/json; charset=utf-8');
    $response = $next($request, $newResponse);
    return $response;
};


// CORS middleware
$app->add(function($request, $response, $next) {
    $route = $request->getAttribute("route");

    $methods = [];

    if (!empty($route)) {
        $pattern = $route->getPattern();

        foreach ($this->router->getRoutes() as $route) {
            if ($pattern === $route->getPattern()) {
                $methods = array_merge_recursive($methods, $route->getMethods());
            }
        }
        //Methods holds all of the HTTP Verbs that a particular route handles.
    } else {
        $methods[] = $request->getMethod();
    }

    $response = $next($request, $response);


    return $response
    ->withHeader('Content-Type', 'application/json; charset=utf-8')
    ->withHeader("Access-Control-Allow-Origin", "*")
    ->withHeader("Access-Control-Allow-Headers", "Content-Type")
    ->withHeader("Access-Control-Allow-Headers", "Authorization")
    ->withHeader("Access-Control-Allow-Methods", "POST, GET, OPTIONS, PUT, DELETE");
});

// Start Routing : Load all route files
$app->get('/fftest', function ($request, $response, $args) {
  echo "haha";

});



// Run
$app->run();
