<?php

namespace src\Models;

class FileModel {
    private $storagePath;

    public function __construct() {
        $this->storagePath = __DIR__ . '/../../File Storage/';
        if (!file_exists($this->storagePath)) {
            mkdir($this->storagePath, 0777, true);
        }
    }

    public function getStoragePath() {
        return $this->storagePath;
    }    

    public function createAndWrite($filename, $content) {
        file_put_contents($this->storagePath . $filename, $content);
    }

    public function read($filename) {
        $filePath = $this->storagePath . $filename;
        return file_exists($filePath) ? file_get_contents($filePath) : 'File not found.';
    }

    public function delete($filename) {
        $filePath = $this->storagePath . $filename;
        if (file_exists($filePath)) {
            unlink($filePath);
        } else {
            return 'File not found.';
        }
    }
}
