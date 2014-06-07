<?php

use App\Framework\SexyLabs\Routes as Route;

$app->get('/:controller(/:params+)', function($controller) use ($app) {
    $args = func_get_args();

    new Route($controller, $args, $app);

//    array_shift($args);
//    $args = $args[0];
//
//    $action          = array_shift($args)."Action";
//    $controllerClass = "App\\Controllers\\".ucfirst(strtolower($controller)).'Controller';
//
//    $controller = new $controllerClass($app);
//    return $controller->$action($args);
});



//$app->group('/api', function () use ($app) {
//    /**
//     * User route group
//     */
//    $app->group('/users', function () use ($app) {
//        /**
//         * New user --> GET /api/users/new
//         */
//        $app->get('/new', function () use ($app) {
//            $app->render('new_user.html');
//        });
//    });
//
//    /**
//     * Role route group
//     */
//    $app->group('/roles', function () use ($app) {
//        /**
//         * New role --> GET /api/roles/new
//         */
//        $app->get('/new', function () use ($app) {
//            $app->render('new_role.html');
//        });
//    });
//});



//GET route
//$app->get('/', function () use ($app) {
//    $app->render('/App/app.html.twig');
//})->name('home');
?>