<?php

class Fibonacci {
    private $num1 = 0;
    private $num2 = 1;
    private $num3;
        
     public function __construct($num1, $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function firstValues()
    {
        echo "Fibonacci Sequence: ". $this->num1 . " ". $this->num2 . " ";
    }

    public function compute($series){
        for ($i = 2; $i < $series; $i++) { 
            if($i < $series)
            $this->num3 = $this->num1 + $this->num2;
        
            $this->num1 = $this->num2;    
            $this->num2 = $this->num3;
            
            echo $this->num3 . " ";
        }
    }

}

$fibonacci = new Fibonacci(0, 1);

echo $fibonacci->firstValues();

echo $fibonacci->compute(10);