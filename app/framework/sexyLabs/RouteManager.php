<?php

namespace App\Framework\SexyLabs;

class RouteManager{

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
        $this->routeArgs  = $this->buildArgsAndParams($args);
        $this->buildRoutes($app);
    }

    protected function buildArgsAndParams($args)
    {
        $argsReIndexed['controllerName'] = $args[0];
        $argsReIndexed['params']         = ($args[1] ? $args[1] : NULL);
        $argsReIndexed['_GET']           = self::getUrlParams();

        return $argsReIndexed;
    }

    protected function buildRoutes($app)
    {
        $args = $this->getRouteArgs();

        array_shift($args);

        $this->action = (!is_null($args['params']) ? array_shift($args['params']) : "Index");

        $controllerClass = self::CONTROLLERS_NAMESPACE.$this->getController();

        $controllerObj = new $controllerClass($app);
        $callAction    = strtolower($this->action)."Action";

        return $controllerObj->$callAction($args);
    }

    public static function getUrlParams()
    {
        $a = explode("&", $_SERVER['QUERY_STRING']);

        if (!(count($a) == 1 && $a[0] == "")) {
            foreach ($a as $key => $value) {
                $b = explode("=", $value);
                $a[$b[0]] = $b[1];
                unset ($a[$key]);
            }
        }else{
            return array();
        }

        return $a;
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