<?php

//GET route
$app->get('/', function () use ($app) {
    $app->render('/App/app.html.twig');
})->name('home');
?>