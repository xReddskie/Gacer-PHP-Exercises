<?php

namespace Models;

class CalculatorModel
{
    private $num1;
    private $num2;
    private $operand;

    public function __construct($num1, $num2, $operand)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->operand = $operand;
    }

    public function compute()
    {
        switch ($this->operand) {
            case 'addition':
                return $this->num1 + $this->num2;
            case 'subtraction':
                return $this->num1 - $this->num2;
            case 'multiplication':
                return $this->num1 * $this->num2;
            case 'division':
                if ($this->num2 != 0) {
                    return $this->num1 / $this->num2;
                } else {
                    return "Error";
                }
            default:
                return "Error";
        }
    }
}
