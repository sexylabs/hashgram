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
    public function listAction($params){
        /**
         * Uma outra maneira de pegar as variáveis do POST é assim:
         * $hashtah = $params['_POST']
         */
        $hashtag = $this->app->request()->post('hashtag');

        if ($hashtag){
            try{
                $this->injectDependencies();
                $result = $this->instagramService->getPhotosByTag($hashtag);

                $this->app->render('templates/home/hashtag.html.twig', array(
                    'hashtag' => $hashtag,
                    'photos' => $result->data
                ));
            }catch (\Exception $e){
                echo $e->getMessage();
                $log = $this->app->getLog();
                $log->warning($e);
            }
        }else{
            $this->app->redirect('/');
        }
    }
}