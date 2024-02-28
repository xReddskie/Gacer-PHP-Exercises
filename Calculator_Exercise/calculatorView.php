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
    <h1> Simple Calculator Exercise </h1>
    <form action='calculatorModel.php' method="POST">
        <label for ="num1"> Enter First Number: </label>
        <input type = "number" id="num1" name="num1" required><br>
        <p> Action:  
            <select name="operand" id="operand">
                <option value="addition">Add</option>
                <option value="subtraction">Subtract</option>
                <option value="multiplication">Multiply</option>
                <option value="division">Divide</option>
            </select><br>
        </p> 
        <label for="num2"> Enter Second Number: </label>
        <input type="number" id="num2" name="num2" required><br>
        
        <div class="vertical-center">
            <button type="submit">Calculate</button>
        </div>

    </form>

    <div class="popup <?php if(isset($_GET['result'])) echo 'active'; ?>">
        <h2>Result</h2>
        <p><?php if(isset($_GET['result'])) echo $_GET['result']; ?></p>
        <button onclick="window.location.href = 'calculatorView.php';">Close</button>
    </div>

</div>
</body>

</html>