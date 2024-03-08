<?php

namespace src\Controllers;

use src\Models\LoginModel;

class LoginController {
    public $usernameError = "";
    public $passwordError = "";

    public function validateInput($username, $password) {
        $user = new LoginModel($username, $password);
    
        $this->usernameError = $user->validateUsername();
        $this->passwordError = $user->validatePassword();
    
        return empty($this->usernameError) && empty($this->passwordError);
    }
}
