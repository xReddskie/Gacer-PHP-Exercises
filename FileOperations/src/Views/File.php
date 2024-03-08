<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if (isset($_SESSION['message'])): ?>
        <p><?php echo $_SESSION['message']; unset($_SESSION['message']); ?></p>
    <?php endif; ?>

    <form action="index.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload File" name="upload">
    </form>

    <form action="index.php" method="post">
        <input type="text" name="filename" placeholder="Enter filename to create/write">
        <textarea name="content" placeholder="Enter text to write"></textarea>
        <input type="submit" value="Create/Write File" name="createWrite">
    </form>

    <form action="index.php" method="post">
        <input type="text" name="filenameToDelete" placeholder="Enter filename to delete">
        <input type="submit" value="Delete File" name="delete">
    </form>
</body>
</html>
