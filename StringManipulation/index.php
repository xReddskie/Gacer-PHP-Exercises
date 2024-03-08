<?php

spl_autoload_register(function ($class) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    require_once $path;
});

use src\Controllers\StringManipController;
use src\Views\StringManipView;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller = new StringManipController();
    $controller->handleRequest();
} else {
    $view = new StringManipView();
    $view->render();
}
