<?php
/**
 * Created by PhpStorm.
 * User: lizhen
 * Date: 2017/7/20
 * Time: 17:47
 */

namespace backend\models;


class Dollar
{
    public $amount;
    public function __construct($num)
    {
        $this->amount = $num;
    }

    public function times($times)
    {
        $this->amount *= $times;
    }

    public function equals(Dollar $dollar)
    {
        return $dollar->amount === $this->amount;
    }
}