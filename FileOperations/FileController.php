<?php

include 'FileModel.php';

$fileModel = new FileModel();

if (isset($_POST['createWrite'])) {
    $filename = $_POST['filename'];
    $content = $_POST['content'];
    $fileModel->createAndWrite($filename, $content);
    echo "File created/written successfully.";
}

if (isset($_POST['delete'])) {
    $filenameToDelete = $_POST['filenameToDelete'];
    $fileModel->delete($filenameToDelete);
    echo "File deleted successfully.";
}

if (isset($_POST['upload'])) {
    $target_file = basename($_FILES["fileToUpload"]["name"]);
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    echo "File uploaded successfully. Contents:<br>";
    echo nl2br(htmlspecialchars($fileModel->read($target_file)));
}
