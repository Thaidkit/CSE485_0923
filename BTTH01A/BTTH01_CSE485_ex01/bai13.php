<?php
    $numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72,
    65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
    
    // Tính toán giá trị trung bình của mảng trên
    $averageValue = array_sum($numbers) / count($numbers);
    echo 'Giá trị trung bình của mảng: ' .$averageValue .'<br>';
    // Liệt kê các số có giá trị lớn hơn giá trị trung bình đó
    echo 'Các giá trị > GTTB: ';
    foreach($numbers as $value){
        if($value > $averageValue){
            echo $value .' ';
        }
    }
    echo '<br>';
    // Liệt kê các số có giá trị nhỏ hơn hoặc bằng giá trị trung bình đó
    echo 'Các giá trị <= GTTB: ';
    foreach($numbers as $value){
        if($value <= $averageValue){
            echo $value .' ';
        }
    }
?>