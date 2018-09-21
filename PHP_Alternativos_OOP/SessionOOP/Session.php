<?php

class Session {

    private static $_sessionStarted = false;

    public static function start()
    {
        if (self::$_sessionStarted == false) {
            session_start();
            self::$_sessionStarted = true;
        }
    }

    public static function set($key, $value)
    {
        $_SESSION['key'] = $value;
    }

    public static function get($key, $optKet = false)
    {
        if ($optKey == true) 
        {
            if(isset($_SESSION[$key][$optKey]))
            return $_SESSION[$key][$optKey];
        }
        else
        {
            if(isset($_SESSION[$key]))
            return $_SESSION[$key];
        }
        
        return false;

    }

    public static function display()
    {
        echo '<pre>';
        var_dump($_SESSION);
        echo '</pre>';
    }

    public static function destroy()
    {
        if (self::$_sessionStarted == true) {
            session_destroy();
        }
    }

}