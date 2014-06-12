<?php

/**
 * Configuring all app routes
 *
 * @author Adriano Fialho <adriano@afialho.com>
 */

use App\Framework\Routing\RouteManager as Route;
use App\Framework\Util\YamlParser as Yaml;

$app->group('/', function () use ($app) {

    $routes = Yaml::YAMLLoad(ROOT . '/app/config/Routes.yaml');

//    var_dump($routes);
    foreach($routes as $route){
        if(empty($route['uriPattern'])){
            //Routes to home path "/"
            $app->get($route['uriPattern'], function () use ($app, $route) {
                Route::getInstance($app, $route, func_get_args());
            })->name($route['slug']);
        }else{
            //Routes to others controllers
            $app->get($route['uriPattern'], function () use ($app, $route) {
                Route::getInstance($app, $route, func_get_args());Route::getInstance($app, $route, func_get_args());
            })->name($route['slug']);

            $app->get(str_replace('(/', '/(', $route['uriPattern']), function () use ($app, $route) {
                $app->redirect('/'.$route['slug'] . ($_SERVER['QUERY_STRING'] ? '?'.$_SERVER['QUERY_STRING'] : ''));
            })->name($route['slug']);
        }
    }

});