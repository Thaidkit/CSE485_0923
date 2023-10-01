<?php
    $numbers = [
        'key1' => 12,
        'key2' => 30,
        'key3' => 4,
        'key4' => -123,
        'key5' => 1234,
        'key6' => -12565,
    ];
    //Lấy ra phần tử đầu tiên, phần tử cuối cùng trong mảng trên
    $firstE = $numbers['key1'];
    print_r('Phần tử đầu là: ' .$firstE .'<br>');
    $lastE = $numbers['key6'];
    print_r('Phần tử cuối là: ' .$lastE .'<br>');
    
    // Tìm số lớn nhất, số nhỏ nhất, tổng các giá trị từ mảng trên
    $maxValue = max($numbers);
    $minValue = min($numbers);
    $sumValues = array_sum($numbers);
    print_r('Giá trị lớn nhất là ' .$maxValue .'<br>' .'Giá trị nhỏ nhất là ' .$minValue .'<br>'
    .'Tổng các giá trị là ' .array_sum($numbers) .'<br>');
    
    // Sắp xếp mảng theo chiều tăng, giảm các giá trị
    echo 'Giá trị tăng dần: ' .'<br>';
    asort($numbers);
    print_r($numbers);
    echo '<br>';
    echo 'Giá trị giảm dần: ' .'<br>';
    arsort($numbers);
    print_r($numbers);
    echo '<br>';
    // Sắp xếp mảng theo chiều tăng, giảm các key
    echo 'Key tăng dần: ' .'<br>';
    ksort($numbers);
    print_r($numbers);
    echo '<br>';
    echo 'Key giảm dần: ' .'<br>';
    krsort($numbers);
    print_r($numbers);
    echo '<br>';
?>