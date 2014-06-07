<?php
use App\Framework\SexyLabs\Routes as Route;

$app->group('/', function () use ($app) {
    $app->get('', function () use ($app) {
        $controller = "home";
        $args       = array('home', array('index'));
        new Route($controller, $args, $app);
    })->name('home');

    $app->get(':controller(/:params+)', function($controller) use ($app) {
        $args = func_get_args();
        new Route($controller, $args, $app);
    });

    $app->get(':controller/(:params+)', function($controller) use ($app) {
        $args = func_get_args();
        new Route($controller, $args, $app);
    });
});