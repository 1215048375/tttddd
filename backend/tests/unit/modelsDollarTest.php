<?php
namespace backend\tests;

use backend\models\Dollar;
use backend\models\Franc;
use backend\models\Money;


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
        $dollarFive = Money::dollar(5);
        $this->assertEquals(Money::dollar(10), $dollarFive->times(2));
        $this->assertEquals(Money::dollar(15), $dollarFive->times(3));

        $francFive = Money::franc(6);
        $this->assertEquals(Money::franc(12), $francFive->times(2));
        $this->assertEquals(Money::franc(18), $francFive->times(3));
    }

    public function testEquals() {
        $this->assertTrue(Money::dollar(5)->equals(Money::dollar(5)));
        $this->assertFalse(Money::dollar(5)->equals(Money::dollar(6)));

        $this->assertTrue(Money::franc(5)->equals(Money::franc(5)));
        $this->assertFalse(Money::franc(5)->equals(Money::franc(6)));

        $this->assertFalse(Money::dollar(5)->equals(Money::franc(5)));
    }

    public function testCurrency()
    {
        $this->assertEquals('USD', Money::dollar(1)->currency());
        $this->assertEquals('CHF', Money::franc(1)->currency());
    }
}