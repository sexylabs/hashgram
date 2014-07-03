<?php
namespace App\Controllers;

use App\Framework\Mvc\Controller\BasicController;
use App\Services\Instagram\InstagramService;


class HomeController extends BasicController {

    public function indexAction($params)
    {
//        print "Acessando: ".get_class($this)."->index()<br /><br />";
//        print "Argumentos: ";
//        var_dump($params);

        $this->app->container->singleton('InstagramService', function () {
            return new InstagramService();
        });

        $instagram = $this->app->InstagramService;
        $result = $instagram->getPhotosBasedOnTag("salvador");


        echo '<pre>';
        var_dump($instagram);
        echo '</pre>';


    }

}