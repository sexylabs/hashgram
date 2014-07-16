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
                $options['result']    = $result->data;

                $this->app->render('templates/home/index.html.twig', $options);
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
}