<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contact Form</title>
</head>

<body>
    
    <div class="content">

        <h1> Simple Contact Form </h1>
        <h4>  By: xReddskie </h4>

        <form action='contactModel.php' method="POST">

            <?php
                if (!empty($_SESSION['errors'])) {
                    $allErrors = join('<br/>', $_SESSION['errors']); 
                    $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
                    echo $errorMessage; 

                    unset($_SESSION['errors']);
                }
            ?>

            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value="<?= isset($_POST['name']) ? htmlspecialchars($_POST['name']) : 'Name goes here.'; ?>"><br>

            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email" value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : 'Email goes here.'; ?>"><br><br>

            <textarea name="message" rows="10" cols="30"> Message goes here.
            </textarea>

            <br>
            <button type="submit">Send</button>

        </form> 

        <div class="popup <?php if(isset($_GET['message'])) echo 'active'; ?>">
            <h2>Sent successfully!</h2>
            <p><?php if(isset($_GET['message'])) echo $_GET['message']; ?></p>
            <button onclick="window.location.href = 'contactView.php';">Close</button>
        </div>
        
    </div>

</body>

</html>