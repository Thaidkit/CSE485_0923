<?php
    $a = array(
        'a' => array(
            'b' => 0, 
            'c' => 1
        ),
        'b' => array(
            'e' => 2, 
            'o' => array('b' => 3))
        );
    //lay gia tri = 3 co key la b
    $key = $a['b'];
    $swapKey = $key['o'];
    echo $swapKey['b'] .'<br>';
    //lay gia tri = 1 co key la c
    $key1 = $a['a'];
    echo $key1['c'] .'<br>';
    //lay thong cua key a
    $key2 = $a['a'];
    print_r($key2);
?>