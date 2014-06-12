<?php

namespace App\Framework\Routing;

/**
 * RoutesManager transforms the Slim Framework in action based framework
 *
 * @author Adriano Fialho <adriano@afialho.com>
 */
class RouteManager{

    CONST CONTROLLERS_BASE_NAMESPACE = 'App\\Controllers\\';

    /**
     * The singleton instance
     * @var \App\Framework\Routing\RouteManager
     */
    private static $instance;

    /**
     * @var \Slim\Slim
     */
    protected $app;

    /**
     * @var string
     */
    protected $controller;

    /**
     * @var string
     */
    protected $action;

    /**
     * @var string
     */
    protected $defaultAction;

    /**
     * @var array
     */
    protected $routeArgs;

    /**
     * @param \Slim\Slim $app
     * @param array $route
     * @param array $args
     */
    private function __construct($app, $route, $args)
    {
        $this->app           = $app;
        $this->controller    = self::CONTROLLERS_BASE_NAMESPACE . $route['defaults']['controller'] . 'Controller';
        $this->defaultAction = $route['defaults']['action'];
        $this->routeArgs     = $this->buildArgsAndParams($args);
        $this->buildRoute();
    }

    /**
     * Get instance of this singleton class
     *
     * @param \Slim\Slim $app
     * @param array $route
     * @param array $args
     * @return RouteManager
     */
    public static function getInstance($app, $route, $args)
    {
        if (!isset(self::$instance) && is_null(self::$instance)) {
            $c = __CLASS__;
            self::$instance = new $c($app, $route, $args);
        }
        return self::$instance;
    }

    /**
     * Build array $args in format:
     * array( 'params' => array(), '_GET' => array() )
     *
     * @param array $args
     * @return array
     */
    private function buildArgsAndParams($args)
    {
        //remove the last array element if is void
        if(empty($args[0][count($args[0]) - 1])){
            unset($args[0][count($args[0]) - 1]);
        }

        $argsReIndexed['params'] = ($args[0] ? $args[0] : array());
        $argsReIndexed['_GET']   = self::getUrlParams();

        return $argsReIndexed;
    }

    /**
     * Returns parameters from URL (?param1=value1&param2=value2)
     * as array( 'param1' => 'value1', 'param2' => 'value2' )
     *
     * @return array
     */
    private static function getUrlParams()
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
     * Includes controller file
     * Extracts action name from $this->routeArgs
     * Instantiate controller Object
     * Call action passing $args
     *
     * @return mixed
     */
    private function buildRoute()
    {
        if($this->includeControllerFile()){
            try{
                    $args            = $this->getRouteArgs();
                    $this->action    = (count($args['params']) ? array_shift($args['params']) : $this->defaultAction);
                    $controllerClass = $this->getController();

                    $controllerObj = new $controllerClass($this->getApp());
                    $callAction    = strtolower($this->action)."Action";

                    if(method_exists($controllerObj, $callAction)){
                        $controllerObj->$callAction($args);
                    }else{
                        throw new \BadMethodCallException(
                            'Method "' . $callAction . '" not found at controller ' . $this->getController(),
                            422
                        );
                    }
            }catch (\Exception $e){
                $log = $this->app->getLog();
                $log->warning($e);
                $this->app->notFound();

//                $a = array(
//                    'class_name' => __CLASS__,
//                    'method_name' => __FUNCTION__
//                );
//                $log->error(implode(', ', array_map(function ($v, $k) { return sprintf("%s='%s'", $k, $v); }, $a, array_keys($a))));
            }
        }
    }

    /**
     * Includes controller php file
     *
     * @return bool
     * @throws \Exception
     */
    private function includeControllerFile()
    {
        if (file_exists($this->getControllerPath())) {
            include $this->getControllerPath();
        } else {
            throw new \Exception('Controller not found ' . $this->getController() . '. Check your route config file.');
        }

        return true;
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

    /**
     * @return \Slim\Slim
     */
    public function getApp()
    {
        return $this->app;
    }

    /**
     * Returns controller file path based on namespace
     * (e.g. the namespace \App\Controllers\DemoController
     * will return ROOT . app/controllers/DemoController.php path)
     *
     * @return string
     */
    public function getControllerPath()
    {
        $pathParts = explode('\\', $this->controller);

        $controllerPath = "";
        foreach($pathParts as $key => $pathPart){
            if($key != (count($pathParts) - 1)){
                $controllerPath .= strtolower($pathPart) . "/";
            }else{
                $controllerPath .= $pathPart . ".php";
            }
        }

        return ROOT . "/" . $controllerPath;
    }

}