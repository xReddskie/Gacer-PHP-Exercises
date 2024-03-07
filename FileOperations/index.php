<?php

spl_autoload_register(function ($class) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    require_once $path;
});

use src\Controllers\FileController;
use src\Views\FileView;

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new FileController();
    $controller->handleRequest($_POST, $_FILES);
} else {
    $view = new FileView();
    $view->render();
}
    