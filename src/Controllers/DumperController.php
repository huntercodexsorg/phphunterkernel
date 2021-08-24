<?php

namespace PhpHunter\Controllers;

class DumperController
{
    /**
     * @description Class Constructor
     */
    public function __construct()
    {
    }

    /**
     * @description Dump Simple
     * @param string $data #Mandatory
     */
    public static function dump(string $data)
    {
        var_dump('<pre>', $data, '</pre>');
    }

    /**
     * @description DD Simple
     * @param string $data #Mandatory
     */
    public static function dd(string $data)
    {
        var_dump('<pre>', $data, '</pre>');
        die;
    }

    /**
     * @description Dump Error
     * @param string $data #Mandatory
     */
    public static function dumpError(string $data): void
    {
        if (is_array($data)) {
            var_dump('<pre>', $data, '</pre>');
        } else {
            echo $data;
        }
        die;
    }

    /**
     * @description Smart Dump
     * @param string $data #Mandatory
     * @param bool $die #Optional
     */
    public static function smartDumper(string $data, bool $die = false)
    {
        echo "smartDumper say: {$data}"."<br />";
        if ($die) die;
    }

}