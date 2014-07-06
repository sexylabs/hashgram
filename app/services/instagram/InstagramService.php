<?php
/**
 * Instagram Service
 *
 * InstagramService is a class responsible for connecting the project with Instagram API.
 *
 * @author Victor Martinez <martinezvcr@gmail.com>
 */

namespace App\Services\Instagram;

class InstagramService {

    const CLIENT_ID 	 = "d2c57fc594d84ccdb4e455beb5da6bd1";
    const CLIENT_SECRET  = "cbe1ee8d4c664f12b548f1a3c790024b";
    const CALLBACK       = "http://localhost:8888/instagram/instagram.class.php";
    const GRANT_TYPE     = "authorization_code";
    const API_URL_BASE   = "https://api.instagram.com/v1/";
    const OAUTH_URL_BASE = "https://api.instagram.com/oauth/";

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $accessToken;

    public function __construct()
    {
        if (empty(self::CLIENT_ID)
            || empty(self::CLIENT_SECRET)
            || empty(self::CALLBACK)
            || empty(self::GRANT_TYPE))
        {
            throw new \Exception("You need to set up the class before instantiating it. Please, provide the client_id, client_secret, call_back and grant_type");
        }
    }

    /**
     * Return photos based on the tag
     *
     * @param string $tag
     * @return array
     */
    public function getPhotosByTag($tag)
    {
        if (self::CLIENT_ID)
        {
            $url = self::API_URL_BASE . "tags/" . $tag . "/media/recent?client_id=" . self::CLIENT_ID;
            $options = array(CURLOPT_RETURNTRANSFER => true);

            return $this->makeCurl($url,$options, false);
        }
        else
        {
            echo "You must provide a client_id";
        }
    }

    /**
     * Create cURL based on the params
     *
     * @param String $url
     * @param array $option
     * @param Bool $auth
     * @return array
     */
    private function makeCurl($url, $option, $auth)
    {


        $cURL = curl_init($url);

        if ($auth)
        {
            $data = array(
                'client_id'	    => self::CLIENT_ID,
                'client_secret' => self::CLIENT_SECRET,
                'grant_type'    => self::GRANT_TYPE,
                'redirect_uri'  => self::CALLBACK,
                'code' 			=> $this->code
            );
        }

        foreach ($option as $key => $value)
        {
            curl_setopt($cURL, $key, $value);
        }

        $result = curl_exec($cURL);
        curl_close($cURL);

        return json_decode($result);
    }

    /**
     * Return the URL required to access Instagram API
     *
     * @return string
     */
    public function getAuthorizationCodeUrl()
    {
        return self::AUTH_URL_BASE . "authorize/?client_id=" . self::CLIENT_ID . "&redirect_uri=" . self::CALLBACK . "&response_type=code";
    }

    /**
     * Set access token
     *
     * @param $token
     */
    public function setAccessToken($token)
    {
        $this->accessToken = $token;
    }

    /**
     * Return the URL required to obtain the token
     *
     * @return string
     */
    public function getAccessTokenUrl()
    {
        return self::OAUTH_URL_BASE . "access_token";
    }

    /**
     * Set code
     *
     * @param string
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

} 