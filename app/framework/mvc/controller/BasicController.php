<?php

namespace App\Framework\Mvc\Controller;

class BasicController
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

    /**
     * @return \Slim\Slim
     */
    public function getApp()
    {
        return $this->app;
    }

}