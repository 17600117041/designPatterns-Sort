<?php
/**
 * Created by PhpStorm.
 * User: zhangda
 * Date: 2017/6/26
 * Time: 下午3:47
 */
//主题接口
interface Subject
{
    public function register(Observer $observer);
    public function notify();
}

//观察者接口
interface Observer
{
    public function watch();
}

//主题
class Action implements Subject
{
    protected $_observers = array();
    public function register(Observer $observer)
    {
        // TODO: Implement register() method.
        $this->_observers[] = $observer;
    }
    public function notify()
{
    // TODO: Implement notify() method.
    foreach ($this->_observers as $observer){
        $observer->watch();
    }
}
}

//观察者
class Cat implements Observer
{
    public function watch()
    {
        // TODO: Implement watch() method.
        echo "cat watches TV";
    }
}

class Dog implements Observer
{
    public function watch()
    {
        // TODO: Implement watch() method.
        echo "dog watches TV";
    }
}

$CI = new Action();
$CI->register(new Cat());
$CI->register(new Dog());
$CI->notify();