<?php

namespace src\Models;

class StringManipModel {
    public function concatenate($str1, $str2) {
        return $str1 . $str2;
    }

    public function substring($str, $start, $length) {
        return substr($str, $start, $length);
    }

    public function replace($str, $search, $replace) {
        return str_replace($search, $replace, $str);
    }
}
