<?php
namespace App\Controllers;

class DemoController extends BaseController{

    public function indexAction($params){
        print "Acessando: ".get_class($this)."->index()<br /><br />";
        print "Argumentos: ";
        var_dump($params);
    }

    public function helloAction($params){
        print "Acessando: ".get_class($this)."->hello()<br /><br />";
        print "Argumentos: ";
        var_dump($params);
    }
}