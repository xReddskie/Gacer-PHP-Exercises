<?php

include 'contactController.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

class FormError {
    public function errorHandler() {
        $errors = [];

        if (!empty($_POST)) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

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

$formError = new FormError();
$errors = $formError->errorHandler();

if (!empty($errors)) {
    session_start(); 
    $_SESSION['errors'] = $errors; 
    header("Location: contactView.php");
    exit();
} else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $form = new Form($name, $email, $message);
    $message = $form->displayMessage();

    header("Location: contactView.php?message=" . urlencode($message));
    exit();
}
