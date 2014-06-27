<?php
namespace App\Controllers;

use App\Framework\Mvc\Controller\BasicController;

class HomeController extends BasicController{

    public function indexAction($params){
        print "Acessando: ".get_class($this)."->index()<br /><br />";
        print "Argumentos: ";
        var_dump($params);
    }

}