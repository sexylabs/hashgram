<?php
namespace App\Controllers;

use App\Framework\Mvc\Controller\BasicController;
use App\Services\Instagram\InstagramService;


class HashtagController extends BasicController {

    /**
     * Show photos based on a hashtag on hashtag.html.twig template
     *
     * @param $params
     */
    public function listAction($params)
    {
        $hashtag = $this->app->request()->post('hashtag');

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
                    $options['result']  = $result->data;

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
            $this->app->redirect('/');
        }
    }
}