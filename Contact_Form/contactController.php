<?php

// Todo:
// Pass through information of name, email, and message fields through post method.
// Submit button creates a pop up box that displays all the inputted values in the field.
// Add a name validator that requires to only put text values(try to capitalize every first letter when creating a space)
// Add an email validator.
// Message has a text minimum and is displayed in the bottom right of the textfield.
class Form {
    private $name;
    private $email;
    private $message;

    public function __construct($name, $email, $message)
    {
        $this->name=$name;
        $this->email=$email;
        $this->message=$message;
    }

    public function displayMessage() {
        $message = "Name: ". $this->name . "<br> <br>". 
        "Email: " . $this->email . "<br> <br>".
        "Message:". "<br> <br>".$this->message;

        return $message;
    }

}
