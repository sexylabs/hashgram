<?php

/**
 * Configuring all app routes
 *
 * @author Adriano Fialho <adriano@afialho.com>
 */

use App\Framework\RouteManager as Route;

$app->group('/', function () use ($app) {

    /**
     * Route for root url "/"
     */
    $app->get('', function () use ($app) {
        Route::getInstance("App\\Controllers\\Home", func_get_args(), $app);
    })->name('home');

    /**
     * Routes for DemoController
     */
    $app->group('demo', function () use ($app) {
        $app->get('(/:action+)', function() use ($app) {
            Route::getInstance("App\\Controllers\\Demo", func_get_args(), $app);
        })->name('demo');

        $app->get('/(:action+)', function() use ($app) {
            $app->redirect('/demo' . ($_SERVER['QUERY_STRING'] ? '?'.$_SERVER['QUERY_STRING'] : ''));
        });

    });
});