<?php
namespace App\Controllers;

use App\Framework\Mvc\Controller\BasicController;
use App\Services\Instagram\InstagramService;


class HomeController extends BasicController {

    /**
     *  Show popular photos on index.html.twig template
     */
    public function indexAction()
    {
        $this->app->container->singleton('InstagramService', function () {
            return new InstagramService();
        });

        try
        {
            $instagram = $this->app->InstagramService;

            try
            {
                $result = $instagram->getPopularPhotos();
                $options['data']    = $result->data;

                $this->app->view()->appendData($options);
                $this->app->render('templates/home/index.html.twig');
            }
            catch (\Exception $e)
            {
                echo $e->getMessage();
                $log = $this->app->getLog();
                $log->warning($e);
            }
        }
        catch (\Exception $e)
        {
            echo $e->getMessage();
            $log = $this->app->getLog();
            $log->warning($e);
        }
    }

    /**
     * Show photos based on a hashtag on hashtag.html.twig template
     *
     * @param $hashtag
     */
    public function hashtag($hashtag)
    {
        if ($hashtag)
        {
            $this->app->container->singleton('InstagramService', function () {
                return new InstagramService();
            });

            try
            {
                $instagram = $this->app->InstagramService;

                try
                {
                    $result = $instagram->getPhotosByTag($hashtag);

                    $options['hashtag'] = $hashtag;
                    $options['data']    = $result->data;

                    $this->app->view()->appendData($options);
                    $this->app->render('templates/home/hashtag.html.twig');
                }
                catch (\Exception $e)
                {
                    echo $e->getMessage();
                    $log = $this->app->getLog();
                    $log->warning($e);
                }
            }
            catch (\Exception $e)
            {
                echo $e->getMessage();
                $log = $this->app->getLog();
                $log->warning($e);
            }
        }
        else
        {
            $this->indexAction();
        }
    }
}