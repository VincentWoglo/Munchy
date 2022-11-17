<?php
    require_once '../vendor/autoload.php';
    use Phroute\Phroute\RouteCollector;

    $router = new RouteCollector();
    $router->get('/', function(){
        require_once('../public/index.php');
    });

    $router->get('/home/', function(){
        return 'This route responds to requests with the POST method at the path /example/1234. It passes in the parameter as a function argument.';
    });
    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['PATH_INFO'], PHP_URL_PATH));

    // Print out the value returned from the dispatched function
    echo $response;
?>