<?php

namespace src\Controllers;

use src\Models\FileModel;

class FileController {
    private $fileModel;

    public function __construct() {
        $this->fileModel = new FileModel();
    }

    public function handleRequest($post, $files) {
        if (isset($post['createWrite'])) {
            $filename = $post['filename'];
            $content = $post['content'];
            $this->fileModel->createAndWrite($filename, $content);
            $_SESSION['message'] = "File created/written successfully.";
        }

        if (isset($post['delete'])) {
            $filenameToDelete = $post['filenameToDelete'];
            $this->fileModel->delete($filenameToDelete);
            $_SESSION['message'] = "File deleted successfully.";
        }

        if (isset($post['upload'])) {
            $target_file = $this->fileModel->getStoragePath() . basename($files["fileToUpload"]["name"]);
            if(move_uploaded_file($files["fileToUpload"]["tmp_name"], $target_file)) {
                $content = nl2br(htmlspecialchars($this->fileModel->read(basename($files["fileToUpload"]["name"]))));
                $_SESSION['message'] = "File uploaded successfully. Contents:<br>" . $content;
            } else {
                $_SESSION['message'] = "There was an error uploading your file.";
            }
        }

        header("Location: ./");
        exit();
    }
}
