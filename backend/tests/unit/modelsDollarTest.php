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
    public function testTimes()
    {
        $dollorFive = new Dollar(5);
        $dollorFive->times(2);
        $this->assertEquals(10, $dollorFive->amount);
        $dollorFive->times(3);
        $this->assertEquals(30, $dollorFive->amount);
    }

    public function testEquals() {
        $dollorFive = new Dollar(5);
        $this->assertTrue($dollorFive->equals(new Dollar(5)));
        $this->assertFalse($dollorFive->equals(new Dollar(6)));

    }
}