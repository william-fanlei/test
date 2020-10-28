<?php

use Biz\StatisticsCommission\Commission;
use Orm\CustomerDeliverer\CustomerDelivererClass;
use Orm\ShopOrderDetail\ShopOrderDetailList;
use Orm\StatisticCommission\StatisticCommissionClass;


class MyArrayAccess implements ArrayAccess{
    private $data = [];
    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
        var_dump($offset);
    }
    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
        var_dump($offset,$value);
    }
    public function offsetGet($offset)
    {
        // TODO: Implement offsetGet() method.
        var_dump($offset);
    }
    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
        var_dump($offset);
    }
}