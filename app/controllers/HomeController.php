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

        // If there is no hashtag parameter, $tag is assigned as "Salvador"
        $hashtag = (empty($hashtag["_GET"]["hashtag"])) ? "Salvador" : $hashtag["_GET"]["hashtag"];

        $this->app->container->singleton('InstagramService', function () {
            return new InstagramService();
        });

        $instagram = $this->app->InstagramService;
        $result = $instagram->getPhotosBasedOnTag($hashtag);


        // Show hashtag name
        echo "<b>Hashtag:</b> #" . $hashtag . "<br />";

        $result = json_decode($result, true);

        // Show 20 photos
        foreach ($result["data"] as $data)
        {
            echo "<img src=".$data["images"]["low_resolution"]["url"]." alt=".$data["caption"]["text"].">";
        }
    }

}