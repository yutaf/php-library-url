<?php

/**
 * Class Url
 */
namespace Yutaf;

class Url
{
    /**
     * Get absolute parent directory name
     *
     * @return string
     */
    public static function getAbsoluteDirname()
    {
        $scheme = self::getScheme();
        $script_dir = dirname($_SERVER['SCRIPT_NAME']);
        return "{$scheme}://{$_SERVER['HTTP_HOST']}{$script_dir}";
    }

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
