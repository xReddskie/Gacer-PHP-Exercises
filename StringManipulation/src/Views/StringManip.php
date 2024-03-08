<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>String Manipulation Exercise</title>
</head>
<body>
<div class="content">
    <h1> String Manipulation Exercise </h1>
    <form action='index.php' method="POST">
        <label for="val1"> Enter Text 1: </label><br>
        <input type="text" id="val1" name="val1" required><br>
        <label for="val2"> Enter Text 2 (For Replace: Word to Replace): </label><br>
        <input type="text" id="val2" name="val2" required><br>
        <label for="val3"> 
            Enter Text 3 (For Substring: Starting Value, Length of Word; 
            <br> For Replace: New Text): 
        </label><br>
        <input type="text" id="val3" name="val3"><br>
        <p> Action:  
            <select name="action" id="action">
                <option value="concat">Concatenate</option>
                <option value="substring">Substring</option>
                <option value="replacement">Replace</option>
            </select><br>
        </p> 
        <div class="vertical-center">
            <button type="submit">Go</button>
        </div>
    </form>
    <div class="popup <?php if(isset($_GET['result'])) echo 'active'; ?>">
        <h2>Result</h2>
        <p><?php if(isset($_GET['result'])) echo $_GET['result']; ?></p>
        <button onclick="window.location.href = 'index.php';">Close</button>
    </div>
</div>
</body>
</html>
