<?php
namespace backend\tests;

use backend\models\Dollar;


class modelsDollarTest extends \Codeception\Test\Unit
{
    /**
     * @var \backend\tests\UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testMe()
    {
        $dollorFive = new Dollar(5);
        $dollorFive.times(2);
        $this->assertEquals(10, $dollorFive->amount);
    }
}