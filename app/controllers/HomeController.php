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

                $options['success'] = $result["success"];
                $options['result']  = $result["data"];
                $options['message'] = $result["message"];

                $this->app->view()->appendData($options);
                $this->app->render('templates/home/index.html.twig');
            }
            catch (\Exception $e)
            {
                $log = $this->app->getLog();
                $log->warning($e);

                $options['success'] = FALSE;
                $options['message'] = $e->getMessage();

                $this->app->view()->appendData($options);
                $this->app->render('templates/home/index.html.twig');
            }
        }
        catch (\Exception $e)
        {
            $log = $this->app->getLog();
            $log->warning($e);

            $options['success'] = FALSE;
            $options['message'] = $e->getMessage();

            $this->app->view()->appendData($options);
            $this->app->render('templates/home/index.html.twig');
        }
    }
}