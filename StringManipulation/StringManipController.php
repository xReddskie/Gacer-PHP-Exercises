<?php

require 'StringManipModel.php';

$model = new StringManipModel();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'];
    $val1 = $_POST['val1'];
    $val2 = $_POST['val2'];
    $val3 = isset($_POST['val3']) ? $_POST['val3'] : '';

    $result = '';

    $search = "";

    switch ($action) {
        case 'concat':
            $result = $model->concatenate($val1, $val2);
            break;
        case 'substring':
            list($start, $length) = explode(',', $val3);
            $result = $model->substring($val1, (int)$start, (int)$length);
            break;
        case 'replacement':
            $result = $model->replace($val1, $val2, $val3);
            break;
    }

    header("Location: StringManipView.php?result=" . urlencode($result));
    exit();
}
 