<?php
/**
 * Created by IntelliJ IDEA.
 * User: rc
 * Date: 2020/9/24
 * Time: 16:51
 */

class Singleton
{
    private static $instance;

    public static function getInstance()
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    private function __construct()
    {
        echo "_construct".PHP_EOL;
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public function test()
    {
        echo "this is a single" . PHP_EOL;
    }
}

## new self new static
## 继承时, static 是由调用者决定的
$singleton = Singleton::getInstance();
$singleton->test();
$singleton2 = Singleton::getInstance();
$singleton2->test();
