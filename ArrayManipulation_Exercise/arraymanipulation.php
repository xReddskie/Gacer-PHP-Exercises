<?php

class ArrayManipulation {
    private $array;
    private $sortOrder = '';

    public function __construct($array) {
        $this->array = $array;
    }

    public function ascendArray() {
        usort ($this->array, function($a, $b) {
            return strcmp($a["Overall Rating: "], $b["Overall Rating: "]);
        });
        $this->sortOrder = 'ascend';
        $this->printArray();
    }

    public function descendArray() {
        usort ($this->array, function($a, $b) {
            return strcmp($b["Overall Rating: "], $a["Overall Rating: "]);
        });
        $this->sortOrder = 'descend';
        $this->printArray();
    }
    
    private function printArray() {
        if ($this->sortOrder == 'ascend') {
            echo "Array in ascending order:<br>";
        } elseif ($this->sortOrder == 'descend') {
            echo "Array in descending order:<br>";
        }

        foreach ($this->array as $key => $value) {
            if (is_string($key)) {
                echo "$key: ";
            }
            if (is_array($value)) {
                echo implode(", ", $value) . PHP_EOL;
            } else {
                echo $value . PHP_EOL;
            }
            echo "<br>";
        }
        echo "<br>";
    }
}

$cellphoneArray = array("Samsung", "iPhone", "Xiaomi", "Realme");
$cellphoneData = array(
    array(
        "Brand: " => "Samsung", 
        "User Satisfaction: " => 89, 
        "Overall Rating: " => 96
    ),
    array(
        "Brand: " => "iPhone", 
        "User Satisfaction: " => 99, 
        "Overall Rating: " => 98
    ),
    array(
        "Brand: " => "Xiaomi", 
        "User Satisfaction: " => 85, 
        "Overall Rating: " => 89
    ),
    array(
        "Brand: " => "Tecno", 
        "User Satisfaction: " => 90, 
        "Overall Rating: " => 74
    )
);

$arrayManipulation = new ArrayManipulation($cellphoneData);

$arrayManipulation->ascendArray();
$arrayManipulation->descendArray();
