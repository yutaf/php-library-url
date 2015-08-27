<?php

/**
 * Class Url
 */
namespace Yutaf;

class Url
{
    /**
     * get url scheme
     *
     * @return string
     */
    public static function getScheme()
    {
        $scheme = 'http';
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
            $scheme = 'https';
        }
        return $scheme;
    }
}