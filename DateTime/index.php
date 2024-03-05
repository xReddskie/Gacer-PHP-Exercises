<?php

class DateTimeDisplay {
    private $dateTime;

    public function __construct() {
        $this->dateTime = new DateTime();
    }

    public function displayDateTime($format = 'Y-m-d H:i:s') {
        return $this->dateTime->format($format);
    }
}

$dateDisplay = new DateTimeDisplay();

echo "Current Date and Time: " . $dateDisplay->displayDateTime() . "<br>";
echo "Formatted Date and Time: " . $dateDisplay->displayDateTime('F j, Y h:i:s A');
