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
     * @param $tag
     * @return String
     * @throws \Exception
     */
    public function getPhotosByTag($tag)
    {
        if (self::CLIENT_ID)
        {
            $url = self::API_URL_BASE . "tags/" . $tag . "/media/recent?client_id=" . self::CLIENT_ID;
            $options = array(
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HEADER => true
            );

            return $this->makeCurl($url,$options, false);
        }
        else
        {
            throw new \Exception("You need to set up the CLIENT_ID in order to show the popular photos");
        }
    }

    /**
     * Return popular photos
     *
     * @return String
     * @throws \Exception
     */
    public function getPopularPhotos()
    {
        if (self::CLIENT_ID)
        {
            $url = self::API_URL_BASE . 'media/popular?client_id='. self::CLIENT_ID;
            $options = array(CURLOPT_RETURNTRANSFER => true);

            try
            {
                return $this->makeCurl($url, $options, false);
            }
            catch (\Exception $e)
            {
                throw new \Exception($e->getMessage());
            }
        }
        else
        {
            throw new \Exception("You need to set up the CLIENT_ID in order to show the popular photos");

        }
    }

    /**
     * Create cURL based on the params
     *
     * @param $url
     * @param $option
     * @param $auth
     * @return mixed
     * @throws \Exception
     */
    private function makeCurl($url, $option, $auth)
    {
        $cURL = curl_init($url);

        if ($auth)
        {
            /*
             * @TODO Implement the event of auth == TRUE
             */
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

        list($messageHeaders, $messageBody) = preg_split("/\r\n\r\n|\n\n|\r\r/", $result, 2);
        $messageHeaders = $this->curlParseHeaders($messageHeaders);

        if (isset($messageBody['error']) or ($messageHeaders['http_status_code'] >= 400))
        {
            // envio email para o time
            throw new \Exception("The server is unreachable.");
        }
        else
        {
            return json_decode($result);
        }
    }

    /**
     *
     * @param array $messageHeaders
     * @return array
     */
    private function curlParseHeaders($messageHeaders)
    {
        $headerLines = preg_split("/\r\n|\n|\r/", $messageHeaders);
        $headers = array();
        list(, $headers['http_status_code'], $headers['http_status_message']) = explode(' ', trim(array_shift($headerLines)), 3);
        foreach ($headerLines as $headerLine)
        {
            list($name, $value) = explode(':', $headerLine, 2);
            $name = strtolower($name);
            $headers[$name] = trim($value);
        }

        return $headers;
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