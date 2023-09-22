<?php
    $array1 = [
        [77, 87],
        [23, 45]
    ];
    
    $array2 = [
        'giá trị 1',
        'giá trị 2'
    ];
    
    $result = [];
    $count = count($array1);
    
    for ($i = 0; $i < $count; $i++) {
        $result[$i] = array_merge([$array2[$i]], $array1[$i]); //hàm merge hợp nhất 2 mạng có cùng key
    }
    
    print_r($result);
?>