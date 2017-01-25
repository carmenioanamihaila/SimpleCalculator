<?php
namespace AppBundle;

/**
 * Class that is responsible for different math operations
 */
class Calculator
{
    /*
     * Adds two integers
     * @param type $first_operand
     * @param type $second_operand
     * @return type     
     * 
     */
    static function add($first_operand, $second_operand)
    {
        return $first_operand + $second_operand;
    }

    /*
     * Multiplies two integers
     * @param type $first_operand
     * @param type $second_operand
     * @return type     
     * 
     */
    static function divide($first_operand, $second_operand)
    {
        if (intval($second_operand) != 0) {
            return $first_operand / $second_operand;
        } else { //in case the second operand is a zero, an exception will be thrown
            throw new \Exception("Division by 0!");
        }
    }

    /*
     * Divides two integers
     * @param type $first_operand
     * @param type $second_operand
     * @return type     
     * 
     */
    static function multiply($first_operand, $second_operand)
    {
        return $first_operand * $second_operand;
    }
}

