<?php

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    include_once 'src/' . $class . '.php';
});

use Views\CalculatorView;

$calculatorView = new CalculatorView();
$calculatorView->render();
