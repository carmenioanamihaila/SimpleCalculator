<?php
namespace AppBundle\CalculatorPackage;

use AppBundle\CalculatorPackage\SimpleCalculator;

/**
 * Class that just creates an instance of a Calculator type
 */
class CalculatorFactory 
{
    public static function create()
    {
        return new SimpleCalculator();
    }

}

