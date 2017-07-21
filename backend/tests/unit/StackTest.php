<?php
/**
 * Created by PhpStorm.
 * User: lizhen
 * Date: 2017/7/20
 * Time: 16:18
 */
class StackTest extends PHPUnit_Framework_TestCase
{
    public function testArrayCount()
    {
        $array = [];
        $this->assertEquals(0, count($array));

        $array[] = 1;
        $this->assertEquals(1, count($array));
    }
}