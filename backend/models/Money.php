<?php
/**
 * Created by PhpStorm.
 * User: lizhen
 * Date: 2017/7/23
 * Time: 0:00
 */

namespace backend\models;


abstract class Money
{
    private $amount;
    protected static $currency;

    public function currency()
    {
        return static::$currency;
    }

    public static function dollar($num)
    {
        return new Dollar($num);
    }

    public static function franc($num)
    {
        return new Franc($num);
    }

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
        return $money->amount === $this->amount &&
            get_called_class() === get_class($money);
    }
}
