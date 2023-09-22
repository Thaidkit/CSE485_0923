<?php
    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
    $maxLength = strlen($array[0]);
    $minLength = strlen($array[0]);
    $printMaxStr = '';
    $printMinStr = '';
    for ($i = 0; $i < count($array); $i++){
        if(strlen($array[$i]) > $maxLength){
            $maxLength = strlen($array[$i]);
            $printMaxStr = $array[$i];
        }
        if (strlen($array[$i]) < $minLength) {
            $minLength = strlen($array[$i]);
            $printMinStr = $array[$i];
        }
    }
    echo "Chuỗi có độ dài lớn nhất là: " . $printMaxStr . ", độ dài: = " . $maxLength .'<br>';
    echo "Chuỗi có độ dài nhỏ nhất là: " . $printMinStr . ", độ dài: = " . $minLength;

?>