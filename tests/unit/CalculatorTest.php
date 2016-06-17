<?php

class CalculatorTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testAddition()
    {
        $calculator = new \Tiix\Calculator\Calculator();

        $this->assertEquals(10, $calculator->add(3, 7));
    }

    public function testSubstraction()
    {
        $calculator = new \Tiix\Calculator\Calculator();

        $this->assertEquals(3, $calculator->substract(10, 7));
    }
}