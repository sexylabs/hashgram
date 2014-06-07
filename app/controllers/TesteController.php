<?php
namespace App\Controllers;

class TesteController{

    protected $app;

    public function __construct($app){
        $this->app = $app;
    }

    public function helloAction($params){
        $this->app->render('/App/app.html.twig');
        var_dump($params);
    }

    public function picaAction($params){
        var_dump($params);
    }
}