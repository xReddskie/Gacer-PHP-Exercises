<?php

class DateTimeDisplay
{
    private $dateTime;

    public function __construct()
    {
        $timezone = new DateTimeZone('Asia/Manila');
        $this->dateTime = new DateTime('now', $timezone);
    }

    public function displayDayDateTimeWithSeconds($format = 'r')
    {
        return $this->dateTime->format($format);
    }

    public function displayDateTimeWithSeconds($format = 'Y-m-d H:i:s e')
    {
        return $this->dateTime->format($format);
    }

    public function displayDateOnly($format = 'Y-m-d')
    {
        return $this->dateTime->format($format);
    }

    public function displayTimeOnly($format = 'H:i')
    {
        return $this->dateTime->format($format);
    }

    public function displayDayOnly($format = 'l')
    {
        return $this->dateTime->format($format);
    }
}

$dateDisplay = new DateTimeDisplay();

echo "Day Only: " . $dateDisplay->displayDayOnly() . "<br>";
echo "Date Only: " . $dateDisplay->displayDateOnly() . "<br>";
echo "Time Only: " . $dateDisplay->displayTimeOnly() . "<br>";
echo "Date and Time with Seconds: " . $dateDisplay->displayDateTimeWithSeconds() . "<br>";
echo "Full Date and Time: " . $dateDisplay->displayDayDateTimeWithSeconds() . "<br>";
