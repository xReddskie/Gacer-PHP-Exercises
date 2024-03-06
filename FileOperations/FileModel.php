<?php

class FileModel {
    public function createAndWrite($filename, $content) {
        file_put_contents($filename, $content);
    }

    public function read($filename) {
        return file_get_contents($filename);
    }

    public function delete($filename) {
        unlink($filename);
    }
}
