<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new \Controllers\CalculatorController();
    $controller->handleRequest();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Simple Calculator Exercise</title>
</head>
<body>
<div class="content">
    <h1>Simple Calculator Exercise</h1>
    <?php if (isset($_SESSION['result'])): ?>
        <div class="result">
            <h2>Result:</h2>
            <p><?= htmlspecialchars($_SESSION['result']); ?></p>
        </div>
        <?php unset($_SESSION['result']); ?>
    <?php endif; ?>
    <form method="POST">
        <label for="num1">Enter First Number:</label>
        <input type="number" id="num1" name="num1" required><br>
        <p>Action:
            <select name="operand" id="operand">
                <option value="addition">Add</option>
                <option value="subtraction">Subtract</option>
                <option value="multiplication">Multiply</option>
                <option value="division">Divide</option>
            </select><br>
        </p>
        <label for="num2">Enter Second Number:</label>
        <input type="number" id="num2" name="num2" required><br>
        
        <div class="vertical-center">
            <button type="submit">Calculate</button>
        </div>
    </form>

</div>
</body>
</html>
