<?php
namespace App\Controllers;

use App\Framework\Mvc\Controller\BasicController;
use App\Services\Instagram\InstagramService;


class HomeController extends BasicController {

    /**
     * Request photos based on hashtag
     *
     * @param string $hashtag
     * @return array
     */
    public function indexAction($hashtag)
    {
        $hashtag = "Salvador";

        $this->app->container->singleton('InstagramService', function () {
            return new InstagramService();
        });

        $instagram = $this->app->InstagramService;

        if ($hashtag)
        {
            $result = $instagram->getPhotosByTag($hashtag);
        }
        else
        {
            $result = $instagram->getPopularPhotos();
        }

        $options['data']    = $result->data;
        $options['hashtag'] = $hashtag;

        $this->app->view()->appendData($options);
        $this->app->render('templates/home/index.html.twig');
    }

}