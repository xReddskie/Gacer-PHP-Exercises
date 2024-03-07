<?php

spl_autoload_register(function ($class) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    require_once $path;
});

use src\Models\ContactModel;
use src\Views\ContactView;
use src\Controllers\ContactController;

session_start();

if (!empty($_POST)) {
    $formError = new ContactModel();
    $errors = $formError->errorHandler();

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
    } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $_SESSION['success_message'] = "Thank you for contacting us, {$name}. Your message has been sent.";
    }
}

$contactView = new ContactView();
$contactView->render();
