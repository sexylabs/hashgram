<?php
namespace App\Controllers;

class HomeController extends BaseController{

    public function indexAction($params){
        print "Acessando: ".get_class($this)."->index()<br /><br />";
        print "Argumentos: ";
        var_dump($params);
    }

}