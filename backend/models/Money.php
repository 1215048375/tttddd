<?php
/**
 * Created by PhpStorm.
 * User: lizhen
 * Date: 2017/7/23
 * Time: 0:00
 */

namespace backend\models;


class Money
{
    private $amount;

    public function __construct($num)
    {
        $this->amount = $num;
    }

    public function times($times)
    {
        return new static($this->amount * $times);
    }

    public function equals($money)
    {
        return $money->amount === $this->amount;
    }
}