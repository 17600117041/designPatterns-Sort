<?php
/**
 * Created by PhpStorm.
 * User: zhangda
 * Date: 2017/6/26
 * Time: 下午4:49
 */
class Single
{
    static $instance;

    static function getInstance(){
        if (self::$instance instanceof self) {
            return self::$instance;
        }
        self::$instance = new self();
        return self::$instance;
    }
}