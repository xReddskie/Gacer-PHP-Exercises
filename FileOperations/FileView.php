<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            margin: auto;
            width: 50%;
            padding: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form {
            margin-bottom: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
        }
        input[type=text], input[type=file], textarea {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="FileController.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload File" name="upload">
    </form>

    <form action="FileController.php" method="post">
        <input type="text" name="filename" placeholder="Enter filename to create/write">
        <textarea name="content" placeholder="Enter text to write"></textarea>
        <input type="submit" value="Create/Write File" name="createWrite">
    </form>

    <form action="FileController.php" method="post">
        <input type="text" name="filenameToDelete" placeholder="Enter filename to delete">
        <input type="submit" value="Delete File" name="delete">
    </form>
</body>
</html>
