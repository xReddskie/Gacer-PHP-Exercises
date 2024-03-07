<?php

namespace src\Controllers;

class ContactController {
    private $name;
    private $email;
    private $message;

    public function __construct($name, $email, $message)
    {
        $this->name=$name;
        $this->email=$email;
        $this->message=$message;
    }

    public function displayMessage() 
    {
        $message = "Name: ". $this->name . "<br> <br>". 
        "Email: " . $this->email . "<br> <br>".
        "Message:". "<br> <br>".$this->message;

        return $message;
    }
}
