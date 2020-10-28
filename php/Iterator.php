<?php

use Biz\StatisticsCommission\Commission;
use Orm\CustomerDeliverer\CustomerDelivererClass;
use Orm\ShopOrderDetail\ShopOrderDetailList;
use Orm\StatisticCommission\StatisticCommissionClass;


class MyIterator implements Iterator{
    private $position = 0;
    private $array = ['first','second','last'];

    public function rewind()
    {
        // TODO: Implement rewind() method.
        var_dump(__METHOD__);
        $this->position = 0;
    }
    public function current()
    {
        // TODO: Implement current() method.
        var_dump(__METHOD__);
        return $this->array[$this->position];
    }
    public function key()
    {
        // TODO: Implement key() method.
        var_dump(__METHOD__);
        return $this->position;
    }
    public function next()
    {
        // TODO: Implement next() method.
        var_dump(__METHOD__);
        ++$this->position;
    }
    public function valid()
    {
        // TODO: Implement valid() method.
        var_dump(__METHOD__);
        return isset($this->array[$this->position]);
    }
}

$my_iterator = new MyIterator();
foreach($my_iterator as $k=>$v){
    var_dump($k,$v);
}