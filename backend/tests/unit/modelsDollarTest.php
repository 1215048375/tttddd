<?php
namespace backend\tests;

use backend\models\Dollar;
use backend\models\Franc;


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
        $dollarFive = new Dollar(5);
        $this->assertEquals(new Dollar(10), $dollarFive->times(2));
        $this->assertEquals(new Dollar(15), $dollarFive->times(3));
        $this->assertNotEquals(new Dollar(16), $dollarFive->times(4));

        $francFive = new Franc(5);
        $this->assertEquals(new Franc(10), $francFive->times(2));
        $this->assertEquals(new Franc(15), $francFive->times(3));
    }

    public function testEquals() {
        $dollarFive = new Dollar(5);
        $this->assertTrue($dollarFive->equals(new Dollar(5)));
        $this->assertFalse($dollarFive->equals(new Dollar(6)));

        $francFive = new Franc(5);
        $this->assertTrue($francFive->equals(new Franc(5)));
        $this->assertFalse($francFive->equals(new Franc(6)));

        $this->assertFalse($francFive->equals($dollarFive));
    }
}