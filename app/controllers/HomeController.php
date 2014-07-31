<?php
namespace App\Controllers;

use App\Framework\Mvc\Controller\BasicController;
use App\Services\Instagram\InstagramService;


class HomeController extends BasicController {

    /**
     * @var \App\Services\Instagram\InstagramService
     */
    private $instagramService;

    public function injectDependencies(){
        $this->app->container->singleton('InstagramService', function () {
            return new InstagramService();
        });

        $this->instagramService = $this->app->InstagramService;
    }

    /**
     *  Show popular photos on index.html.twig template
     */
    public function indexAction()
    {
        try
        {
            $this->injectDependencies();

            $result = $this->instagramService->getPopularPhotos();

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
}