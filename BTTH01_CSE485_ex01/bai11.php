<?php
    $array = array(1, 2, 3, 4, 5);
    print_r($array);
    echo'<br>';
    $element = 2; //pahn tu thu 3
    unset($array[$element]);
    $array = array_values($array); //ham aray_values(): cau truc lai key ham mà khong thay doi gia tri
    print_r($array);
?>