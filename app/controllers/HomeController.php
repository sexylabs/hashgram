<?php
namespace App\Controllers;

use App\Framework\Mvc\Controller\BasicController;

class HomeController extends BasicController{

    /**
     * Default action
     */
    public function indexAction(){
        $this->app->render('templates/home/index.html.twig', array('groupedPhotos' => $this->getPhotos()));
    }

    /**
     * Get photos to display on view
     * @return \ArrayObject
     */
    private function getPhotos(){
        $categories = array('sports', 'food', 'fashion', 'people');

        $photos = array();
        for($i = 1; $i <= 10; $i++){
            foreach($categories as $category){
                $photos[$i][] = 'http://lorempixel.com/600/600/'.$category.'/'.$i;
                shuffle($photos[$i]);
            }
        }

        return $photos;
    }

}