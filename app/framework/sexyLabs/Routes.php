<?php
namespace App\Framework\SexyLabs;

class Routes{

    CONST CONTROLLERS_NAMESPACE = "App\\Controllers\\";

    /**
     * @var string
     */
    protected $controller;

    /**
     * @var string
     */
    protected $action;

    /**
     * @var array
     */
    protected $routeArgs;

    /**
     * @param string $controller
     * @param array $args
     * @param \Slim\Slim $app
     */
    public function __construct($controller, $args, $app)
    {
        $this->controller = ucfirst(strtolower($controller)).'Controller';
        $this->routeArgs  = $args;
        $this->buildRoutes($app);
    }

    protected function buildRoutes($app)
    {
        $args = $this->getRouteArgs();
        array_shift($args);
        $args = $args[0];

        $this->action    = array_shift($args)."Action";
        $controllerClass = Routes::CONTROLLERS_NAMESPACE.$this->getController();

        $controllerObj = new $controllerClass($app);
        $callAction    = $this->action;

        return $controllerObj->$callAction($args);
    }

    /**
     * @return string
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @return array
     */
    public function getRouteArgs()
    {
        return $this->routeArgs;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

}