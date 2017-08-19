<?php
/**
 * Vedic Rishi Client for consuming Vedic Rishi Astro Web APIs
 * http://www.vedicrishiastro.com/astro-api/
 * Author: Chandan Tiwari
 * Date: 06/12/14
 * Time: 5:42 PM
 */

require 'sdk.php';


class VedicRishiClient
{
    private $userId = null;
    private $apiKey = null;
    private $language = null;

    //TODO: MUST enable this on production- MUST
    //private $apiEndPoint = "https://api.vedicrishiastro.com/v1";

    //TODO: MUST- comment this and uncomment https url above on production for added security

    /**
     * @param $uid string userId for Vedic Rishi Astro API
     * @param $key string api key for Vedic Rishi Astro API access
     */
    public function __construct($uid, $key)
    {
        $this->userId = $uid;
        $this->apiKey = $key;
    }


    public function getPdfresponse($data)
    {
        $response = getPdfCurl($this->userId, $this->apiKey,$data);
        return $response;
    }


}