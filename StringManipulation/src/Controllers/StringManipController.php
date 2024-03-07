<?php

namespace src\Controllers;

use src\Models\StringManipModel;

class StringManipController {
    private $model;

    public function __construct() {
        $this->model = new StringManipModel();
    }

    public function handleRequest() {
        $action = $_POST['action'];
        $val1 = $_POST['val1'];
        $val2 = $_POST['val2'];
        $val3 = isset($_POST['val3']) ? $_POST['val3'] : '';

        switch ($action) {
            case 'concat':
                $result = $this->model->concatenate($val1, $val2);
                break;
            case 'substring':
                list($start, $length) = explode(',', $val3);
                $result = $this->model->substring($val1, (int)$start, (int)$length);
                break;
            case 'replacement':
                $result = $this->model->replace($val1, $val2, $val3);
                break;
        }

        header("Location: ./?result=" . urlencode($result));
        exit();
    }
}
