<?php
/**
 * Created by PhpStorm.
 * User: zhangda
 * Date: 2017/6/26
 * Time: 下午4:38
 */
interface Transport
{
    public function go();
}

class Bus implements Transport
{
    public function go()
    {
        // TODO: Implement go() method.
        echo "bus 每一站都要停";
    }
}

class Car implements Transport
{
    public function go()
    {
        // TODO: Implement go() method.
        echo "car 速度很快";
    }
}

class Factory
{
    static public function transFaory($transport)
    {
        switch ($transport){
            case 'bus':
                return new Bus();
            break;
            case 'car':
                return new Car();
            break;
        }
    }
}

$transport  = Factory::transFaory('car');
$transport->go();