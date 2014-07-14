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
    public function indexAction()
    {
        $this->app->container->singleton('InstagramService', function () {
            return new InstagramService();
        });

        $instagram = $this->app->InstagramService;
        $result = $instagram->getPopularPhotos();

        $options['data']    = $result->data;

        $this->app->view()->appendData($options);
        $this->app->render('templates/home/index.html.twig');
    }

    public function hashtag($hashtag)
    {
        if ($hashtag)
        {
            $this->app->container->singleton('InstagramService', function () {
                return new InstagramService();
            });

            $instagram = $this->app->InstagramService;
            $result = $instagram->getPhotosByTag($hashtag);

            $options['hashtag'] = $hashtag;
            $options['data']    = $result->data;

            $this->app->view()->appendData($options);
            $this->app->render('templates/home/hashtag.html.twig');
        }
        else
        {
            $this->indexAction();
        }
    }
}