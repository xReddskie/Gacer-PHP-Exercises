<?php

include 'calculatorController.php';

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operand = $_POST['operand'];

$calculator = new Calculator($num1, $num2, $operand);

$result = $calculator->compute();

header("Location: calculatorView.php?result=$result");

exit();