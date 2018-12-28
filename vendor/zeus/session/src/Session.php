<?php
/*
 *
 *
 * session class static
 * 
 * dılo sürücü 26.02.2018
 *
 */
namespace Session;

class Session
{


    private static $isSessionStart = false;


    /**
     *singletion
     */
    private static function start()
    {


        if (self::$isSessionStart == false) {

            self::$isSessionStart = true;

            session_start();
        }

    }


    /**
     * @param $key
     * @return mixed
     */
    public static function get($key)
    {

        self::start();

        if (isset($_SESSION[$key])) {

            return $_SESSION[$key];
        }

    }


    /**
     * @param $key
     * @param $val
     * @throws Exception
     */
    public static function set($key, $val)
    {
        self::start();


        if (self::$isSessionStart == false) {


            throw new Exception("before must call Session::start() and after use Session::set(key,val) ");
        } else {

            $_SESSION[$key] = $val;

        }


    }


    /**
     *
     */
    public static function display()
    {
        self::start();

        if (isset($_SESSION)) {
            echo "<pre>";
            print_r($_SESSION);

            echo "</pre>";

        }
    }


    /**
     * @param $key
     */
    public static function delete($key)
    {
        self::start();

        if (isset($_SESSION[$key]))

            unset($_SESSION[$key]);
    }

    /**
     * @return bool
     */
    public static function flush()
    {

        self::start();


        if (isset($_SESSION)) {


            session_unset();

            session_destroy();
        } else
            return false;


    }
}




