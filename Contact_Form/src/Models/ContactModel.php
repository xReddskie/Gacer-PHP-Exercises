<?php

namespace src\Models;

class ContactModel {
    public function errorHandler() {
        $errors = [];

        if (!empty($_POST)) {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $message = trim($_POST['message']);

            if (empty($name)) {
                $errors[] = 'Name is empty!';
            }

            if (empty($email)) {
                $errors[] = 'Email is empty!';
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = 'Invalid email format!';
            }

            if (empty($message)) {
                $errors[] = 'Message is empty!';
            }
        }
        return $errors;
    }
}
