<?php

require_once 'loginModel.php';

class LoginController {
    public $usernameError = "";
    public $passwordError = "";

    public function validateInput($username, $password) {
        $user = new User($username, $password);
    
        $this->usernameError = $user->validateUsername();
        $this->passwordError = $user->validatePassword();
    
        return empty($this->usernameError) && empty($this->passwordError);
    }
    
}
