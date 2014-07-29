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
    const API_URL_BASE   = "https://api.instagram.com/v1/";

    public function __construct()
    {
        if (!defined('self::CLIENT_ID'))
        {
            throw new \Exception("You need to set up the class before instantiating it. Please, provide the CLIENT_ID.");
        }
    }

    /**
     * Return photos based on the tag
     *
     * @param $tag
     * @return array
     * @throws \Exception
     */
    public function getPhotosByTag($tag)
    {
        if (defined('self::CLIENT_ID'))
        {
            $url = self::API_URL_BASE . "tags/" . $tag . "/media/recent?client_id=" . self::CLIENT_ID;
            $options = array(
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HEADER => true
            );

            try
            {
                $curlResult = $this->makeCurl($url,$options, false);

                $result["data"] = $curlResult->data;

                if (!empty($result["data"]))
                {
                    $result["success"]  = TRUE;
                    $result["message"]  = "";
                }
                else
                {
                    $result["success"]  = FALSE;
                    $result["message"]  = "Unfortunately we couldn't find any photo with the hashtag <b>#{$tag}</b>.";
                }

                return $result;
            }
            catch (\Exception $e)
            {
                throw new \Exception($e->getMessage());
            }

        }
        else
        {
            throw new \Exception("You need to set up the CLIENT_ID in order to show the popular photos.");
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
        if (defined('self::CLIENT_ID'))
        {
            $url = self::API_URL_BASE . 'media/popular?client_id='. self::CLIENT_ID;
            $options = array(
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HEADER => true
            );

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
            throw new \Exception("You need to set up the CLIENT_ID in order to show the popular photos.");

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
            /*
             * @TODO Send email to the team
             */
            throw new \Exception("The server is unreachable.");
        }
        else
        {
            return json_decode($messageBody);
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
} 