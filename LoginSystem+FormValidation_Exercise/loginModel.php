<?php

class User {
    public $username;
    public $password;

    private $storedUsername = "admin";
    private $storedPassword = "Password123";

    function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function validateUsername() {
        if (empty($this->username)) {
            return "Username is required";
        }
        
        if ($this->username != $this->storedUsername) {
            return "Username is unknown";
        }

        return "";
    }

    public function validatePassword() {
        if (empty($this->password)) {
            return "Password is required";
        }

        if (
            $this->username === $this->storedUsername 
            && $this->password != $this->storedPassword
        ) {
            return "Password is wrong!";
        }

    return "";
    }
}
