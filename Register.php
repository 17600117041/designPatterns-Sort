<?php
/**
 * Created by PhpStorm.
 * User: zhangda
 * Date: 2017/6/26
 * Time: 下午5:00
 */
class Single
{
    static $instance = null;

    public static function getInstance()
    {
        if (self::$instance instanceof self) {
            return self::$instance;
        }
        self::$instance = new self();
        return self::$instance;
    }
}

class Factory
{
    static function getFactory()
    {
        return Single::getInstance();
    }
}

class Register
{
    protected static $observers;

    public static function set($ablis, $observer)
    {
        self::$observers[$ablis] = $observer;
    }

    public static function get($ablis)
    {
        return self::$observers[$ablis];
    }

    public static function unset($ablis)
    {
        unset(self::$observers[$ablis]);
    }

}

Register::set('rand', Factory::getFactory());

$object =  Register::get('rand');

var_dump($object);