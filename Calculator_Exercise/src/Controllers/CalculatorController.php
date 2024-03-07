<?php

namespace Controllers;

use Models\CalculatorModel;

class CalculatorController
{
    public function handleRequest()
    {
        $num1 = $_POST['num1'] ?? null;
        $num2 = $_POST['num2'] ?? null;
        $operand = $_POST['operand'] ?? null;

        if ($num1 !== null && $num2 !== null && $operand !== null) {
            $calculatorModel = new CalculatorModel($num1, $num2, $operand);
            $result = $calculatorModel->compute();

            $_SESSION['result'] = $result;

            header('Location: index.php');
            exit;
        }
    }
}
