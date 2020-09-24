<?php
/**
 * Created by IntelliJ IDEA.
 * User: rc
 * Date: 2020/9/24
 * Time: 16:09
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
    public $_observers = array();

    public function register(Observer $observer)
    {
        // TODO: Implement register() method.
        $this->_observers[] = $observer;
    }

    public function notify()
    {
        // TODO: Implement notify() method.
        foreach ($this->_observers as $observer) {
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
        echo "this is cat" . PHP_EOL;
    }
}

class Dog implements Observer
{
    public function watch()
    {
        // TODO: Implement watch() method.
        echo "this is dog" . PHP_EOL;
    }
}

$action = new Action();
$action->register(new Cat);
$action->register(new Dog);
$action->notify();