<?php //framework/src/app.php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
$routes->add(
    'hello',
    new Routing\Route(
        '/hello/{name}/{age}',
        array('name' => 'mundo','age' => 'desconhecida')
    )
);
$routes->add(
    'helloSemName',
    new Routing\Route(
        '/helloSemName/{age}',
        array('name' => 'mundo','age' => 'desconhecida')
    )
);

$routes->add(
    'bye',
    new Routing\Route(
        '/bye/{name}',
        array('name' => 'Forasteiro')
    )
);

$routes->add(
    'home',
    new Routing\Route(
        'home'
    )
);

return $routes;