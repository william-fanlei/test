<?php

interface Product
{
    public function show();
}

class ProductA implements Product
{
    public function show()
    {
        echo 'this is a ProductA' . PHP_EOL;
    }
}

class ProductB implements Product
{
    public function show()
    {
        echo 'this is a ProductB' . PHP_EOL;
    }
}

//简单工厂
/*class ProductFactory
{
    public static function createProduct($type)
    {
        switch ($type) {
            case 'a':
                return new ProductA();
            case 'b':
                return new ProductB();
        }
    }
}
$product = ProductFactory::createProduct('a');
$product->show();*/

//工厂方法
abstract class Factory{
    abstract static function show();
}
class FactoryA extends Factory{
    public static function show()
    {
        // TODO: Implement create() method.
        return new ProductA();
    }
}
class FactoryB extends Factory{
    public static function show()
    {
        // TODO: Implement create() method.
        return new ProductB();
    }
}
$product_a = FactoryA::show();
$product_a->show();
$product_b = FactoryB::show();
$product_b->show();
//抽象工厂方法(fa,fb,pa,pb)

/*abstract class Factory
{
    public abstract function ProductA();

    public abstract function ProductB();
}

abstract class AbstractProduct
{
    public abstract function Show();
}

abstract class ProductA
{
    public abstract function Show();
}

abstract class ProductB
{
    public abstract function Show();
}

class FactoryAProductA extends productA
{
    public function show()
    {
        echo 'FactoryA ------ productA' . PHP_EOL;
    }
}

class FactoryBProductA extends productA
{
    public function show()
    {
        echo 'FactoryB ------ productA' . PHP_EOL;
    }
}

class FactoryAProductB extends productB
{
    public function show()
    {
        echo 'FactoryA ------ productB' . PHP_EOL;
    }
}

class FactoryBProductB extends productB
{
    public function show()
    {
        echo 'FactoryB ------ productB' . PHP_EOL;
    }
}

class FactoryA extends Factory
{
    public function ProductA()
    {
        return new FactoryAProductA();
    }

    public function ProductB()
    {
        return new FactoryAProductB();
    }
}

class FactoryB extends Factory
{
    public function ProductA()
    {
        return new FactoryBProductA();
    }

    public function ProductB()
    {
        return new FactoryBProductB();
    }
}

$factory_a = new FactoryA();
$factory_a->ProductA()->show();
$factory_a->ProductB()->show();*/

