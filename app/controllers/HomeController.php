<?php
namespace App\Controllers;

use App\Framework\Mvc\Controller\BasicController;
use App\Services\Instagram\InstagramService;


class HomeController extends BasicController {

    public function indexAction($tag)
    {
        // If there is no hashtag parameter, $tag is assigned as "Salvador"
        $tag = (empty($tag["_GET"]["hashtag"])) ? "Salvador" : $tag["_GET"]["hashtag"];

        $this->app->container->singleton('InstagramService', function () {
            return new InstagramService();
        });

        $instagram = $this->app->InstagramService;
        $result = $instagram->getPhotosBasedOnTag($tag);

        echo '<pre>';
        var_dump($result->data);
        echo '</pre>';
    }

}