<?php

/**
 * Configuring all app routes
 *
 * @author Adriano Fialho <adriano@afialho.com>
 */

use App\Framework\Mvc\Routing\RouteManager as Route;
use App\Framework\Util\YamlParser as Yaml;

$app->group('/', function () use ($app) {

    $routes = Yaml::YAMLLoad(ROOT . '/app/config/Routes.yaml');

    foreach($routes as $route){
        //ROUTE FOR OTHER CONTROLLERS
        //GET ROUTE
        $app->get($route['uriPattern'], function () use ($app, $route) {
            $urlArgs          = func_get_args();
            $urlArgs['_POST'] = ($_POST ? $_POST : array());

            Route::getInstance($app, $route, $urlArgs);
        })->name($route['slug']);

        //POST ROUTE
        $app->post($route['uriPattern'], function () use ($app, $route) {
            $urlArgs          = func_get_args();
            $urlArgs['_POST'] = ($_POST ? $_POST : array());

            Route::getInstance($app, $route, $urlArgs);
        });

        //PUT ROUTE
        $app->put($route['uriPattern'], function () use ($app, $route) {
            $urlArgs          = func_get_args();
            $urlArgs['_POST'] = ($_POST ? $_POST : array());

            Route::getInstance($app, $route, $urlArgs);
        });

        //DELETE ROUTE
        $app->delete($route['uriPattern'], function () use ($app, $route) {
            $urlArgs          = func_get_args();
            $urlArgs['_POST'] = ($_POST ? $_POST : array());

            Route::getInstance($app, $route, $urlArgs);
        });

        $app->get(str_replace('(/', '/(', $route['uriPattern']), function () use ($app, $route) {
            $app->redirect('/'.$route['slug'] . ($_SERVER['QUERY_STRING'] ? '?'.$_SERVER['QUERY_STRING'] : ''));
        });
    }
});