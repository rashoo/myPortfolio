<?php
    function randomString($n) {
        $characters = '0123456789abcdefABCDEF';
        $str = '';
        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) -1);
            $str = $str . $characters[$index];
        } return $str;
    }