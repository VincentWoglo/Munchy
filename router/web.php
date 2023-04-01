<?php
    use munchy\router\loader;
    use Phroute\Phroute\RouteCollector;
    use munchy\controller\loginController;

    $router = new RouteCollector();

    $router->get('/', function(){
        return 'This route responds to requests with the POST method at the path /example/1234. It passes in the parameter as a function argument.';
    });

    $router->get('/index/', function(){
        loader::controller('indexController@dump', [1,234,45]);
    });
    $router->post('/index/', function(){});

    $router->get('/login/', function()
    {
        loader::controller('loginController@dump', [1,234,45]);
    });

    $router->post('/login/', function()
    {
        loader::controller('loginController@dump', [1,234,45]);
    });

    $router->get('/register/', function()
    {
        loader::controller('registerController@register', [1,234,45]);
    });
    $router->post('/register/', function()
    {
        loader::controller('registerController@register', [1,234,45]);
    });

    $router->get('/home/', function()
    {
        return 'This route responds to requests with the POST method at the path /example/1234. It passes in the parameter as a function argument.';
    });


    $router->get('/dashboard/', function()
    {
        return loader::controller('dashboardHomeController@home', [1,234,45]);
    });

    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['PATH_INFO'], PHP_URL_PATH));

    // Print out the value returned from the dispatched function
    echo $response;
?>