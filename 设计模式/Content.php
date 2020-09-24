<?php
/**
 * Created by IntelliJ IDEA.
 * User: rc
 * Date: 2020/9/24
 * Time: 18:55
 */

interface Strategy
{
    public function run();
}

class AirStrategy implements Strategy
{
    public function run()
    {
        echo 'this is air' . PHP_EOL;
    }
}

class TrainStrategy implements Strategy
{
    public function run()
    {
        echo 'this is a train' . PHP_EOL;
    }
}

class Content
{
    private $strategy;

    public function __construct($method)
    {
        $temp = new ReflectionClass($method);
        $this->strategy = $temp->newInstance();
    }

    public function go()
    {
        $this->strategy->run();
    }
}

$strategy = new Content('AirStrategy');
$strategy->go();