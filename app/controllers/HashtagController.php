<?php
namespace App\Controllers;

use App\Framework\Mvc\Controller\BasicController;
use App\Services\Instagram\InstagramService;


class HashtagController extends BasicController {

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
     * Show photos based on a hashtag on hashtag.html.twig template
     *
     * @param $params
     */

    public function listAction($params)
    {
        // Could get by $params['_POST']
        $hashtag = $this->app->request()->post('hashtag');
        $hashtag = str_replace('#', '', $hashtag);

        if ($hashtag)
        {
            try
            {
                $this->injectDependencies();

                $result = $this->instagramService->getPhotosByTag($hashtag);

                $options['hashtag'] = $hashtag;
                $options['success'] = $result["success"];
                $options['result']  = $result["data"];
                $options['message'] = $result["message"];

                $this->app->view()->appendData($options);
                $this->app->render('templates/home/hashtag.html.twig');
            }
            catch (\Exception $e)
            {
                $log = $this->app->getLog();
                $log->warning($e);

                $options['success'] = FALSE;
                $options['message'] = $e->getMessage();

                $this->app->view()->appendData($options);
                $this->app->render('templates/home/hashtag.html.twig');
            }
        }
        else
        {
            $options['success'] = FALSE;
            $options['message'] = "You haven't provided any hashtag.";

            $this->app->view()->appendData($options);
            $this->app->render('templates/home/hashtag.html.twig');
        }
    }
}