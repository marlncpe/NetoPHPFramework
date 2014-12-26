<?php
include_once '././app/config/config.php';
class urlHelper{

    function __construct() {
        
    }

    public static function baseUrl($url) {
        if ($url == "") {
            return Config::$url;
        } else {
            return Config::$url . $url;
        }
    }

}
