<?php

namespace bootstrap;
class bootstrap
{

    public static function run()
    {
        session_start();
        self::parseUrl();
    }

    public static function parseUrl()
    {
        if ($_GET['c']) {
            $class = "\app\comtroller\\" . ucfirst($_GET['c']);
            $action = $_GET['a'];
        } else {
            $class = "\app\comtroller\Index";
            $action = "shop";
        }
        echo (new $class)->$action();
    }


}


?>