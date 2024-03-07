<?php

use src\Controllers\LoginController;

$usernameError = "";
$passwordError = "";
$isValid = false;

if (isset($_POST['submit'])) {
    $loginController = new LoginController();
    $isValid = $loginController->validateInput($_POST['username'], $_POST['password']);

    $usernameError = $loginController->usernameError;
    $passwordError = $loginController->passwordError;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Exercise</title>
</head>

<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="index.php" method="post">
        <h3>Login Here</h3>
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" id="username" 
        value="<?= htmlspecialchars($_POST['username'] ?? '', ENT_QUOTES) ?>">
        <span><?= $usernameError ?></span>

        <label for="password">Password</label>
        <input type="password" placeholder="Enter Password" name="password" id="password">
        <span><?= $passwordError ?></span>

        <button type="submit" name="submit">Login</button>

        <?php
            if ($isValid) {
                echo"Successfully Logged In!"; 
            }
        ?>

    </form>
</body>
</html>
