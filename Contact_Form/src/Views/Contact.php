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
        <h1>Simple Contact Form</h1>
        <h4>By: xReddskie</h4>
        <form action='index.php' method="POST">
            <?php
                if (!empty($_SESSION['errors'])) {
                    echo '<p style="color: red;">' . join('<br/>', $_SESSION['errors']) . '</p>';
                    unset($_SESSION['errors']);
                }

                if (!empty($_SESSION['success_message'])) {
                    echo '<p style="color: green;">' . $_SESSION['success_message'] . '</p>';
                    unset($_SESSION['success_message']);
                }
            ?>

            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" placeholder="Name goes here."><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" placeholder="Email goes here."><br><br>

            <textarea name="message" rows="10" cols="30" placeholder="Message goes here."></textarea><br>
            <button type="submit">Send</button>
        </form> 
    </div>
</body>
</html>
