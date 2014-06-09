<?php

namespace App\Framework;

/**
 * RoutesManager transforms the Slim Framework in action based framework
 *
 * @author Adriano Fialho <adriano@afialho.com>
 */
class RouteManager{

    protected $error;

    /**
     * The singleton instance
     * @var \App\Framework\RouteManager
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
    protected $method;

    /**
     * @var array
     */
    protected $routeArgs;

    /**
     * @param string $controller
     * @param array $args
     * @param \Slim\Slim $app
     */
    private function __construct($controller, $args, $app)
    {
//        $this->error = new RouteErrorHandler();
//        set_error_handler( array( $this->error, 'execute' ) );

        $this->app        = $app;
        $this->controller = $controller.'Controller';
        $this->routeArgs  = $this->buildArgsAndParams($args);
        $this->buildRoute();
    }

    /**
     * Get instance of this singleton class
     *
     * @param string $controller
     * @param array $args
     * @param \Slim\Slim $app
     * @return RouteManager
     */
    public static function getInstance($controller, $args, $app)
    {
        if (!isset(self::$instance) && is_null(self::$instance)) {
            $c = __CLASS__;
            self::$instance = new $c($controller, $args, $app);
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
     * . Extracts method name from $this->routeArgs
     * . Instantiate controller Object
     * . Call action method passing $args
     *
     * @return mixed
     */
    private function buildRoute()
    {
        try{
            if($this->includeControllerFile()){
                $args            = $this->getRouteArgs();
                $this->method    = (count($args['params']) ? array_shift($args['params']) : "Index");
                $controllerClass = $this->getController();

                $controllerObj = new $controllerClass($this->getApp());
                $callAction    = strtolower($this->method)."Action";

                if(method_exists($controllerObj, $callAction)){
                    $controllerObj->$callAction($args);
                }else{
                    throw new \Exception('<b>ERROR:</b> Bad route formats');
                }
            }
        }catch (\Exception $e){
            $this->app->flash('error', $e->getMessage());
            $this->app->render('layouts/error.html.twig');
        }
    }

    /**
     * Includes controller php file
     *
     * @return bool
     * @throws \Exception
     */
    private function includeControllerFile(){
        if (file_exists($this->getControllerPath())) {
            include $this->getControllerPath();
        } else {
            throw new \Exception('<b>ERROR:</b> Controller not found ' . $this->getController());
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
    public function getMethod()
    {
        return $this->method;
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
    public function getControllerPath(){
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