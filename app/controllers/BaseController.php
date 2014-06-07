<?php
namespace App\Controllers;

class BaseController
{

    /**
     * @var \Slim\Slim $app
     */
    protected $app;

    /**
     * @param \Slim\Slim $app
     */
    public function __construct($app){
        $this->app = $app;
    }

    public function indexAction($params){}

    /**
     * @return \Slim\Slim
     */
    public function getApp()
    {
        return $this->app;
    }

}