<?php

namespace Tests\AppBundle\CalculatorPackage;

use AppBundle\CalculatorPackage\CalculatorFactory;
use AppBundle\CalculatorPackage\SimpleCalculator;

class CalculatorFactoryTest extends \PHPUnit_Framework_TestCase
{
    
    /**
     * tests if the simple calculator is created with the right operands
     */
    public function testCreateSuccessful()
    {
        $calculator = CalculatorFactory::create();
        $this->assertInstanceOf(SimpleCalculator::class, $calculator);
    }
    
}