<?php
    function tinhTong($arr){
        $sum = 0;
        foreach ($arr as $element) {
            $sum += $element;
        }
        return $sum;
    }
    function tinhTich($arr){
        $res = 1;
        foreach ($arr as $element) {
            $res *= $element;
        }
        return $res;
    }
    function tinhHieu($arr){
        $res = $arr[0];
        for ($i = 1; $i < count($arr); $i++){
            $res -= $arr[$i];
        }
        return $res;
    }
    function tinhThuong($arr) {
        $res = $arr[0];
        for ($i = 1; $i < count($arr); $i++) {
          $res /= (double)$arr[$i];
        }
        return $res;
    }

    $arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];
    echo 'Tổng các phần tử = ';
    for ($i = 0; $i <= count($arrs); $i++ ){
        if ($i == count($arrs))
            echo ' = ' ;
        else if ($i == count($arrs)-1 ){
            echo $arrs[$i];
        }else 
            echo $arrs[$i] .' + ';
    }
    $tong = tinhTong($arrs);
    echo $tong .'<br>';
    //echo "Tong = " .implode("+", $arrs) . " = " .$tong;

    echo 'Tích các phần tử = ';
    for ($i = 0; $i <= count($arrs); $i++ ){
        if ($i == count($arrs))
            echo ' = ' ;
        else if ($i == count($arrs)-1 ){
            echo $arrs[$i];
        }else 
            echo $arrs[$i] .' * ';
    }
    $tich = tinhTich($arrs);
    echo $tich .'<br>';

    echo 'Hiệu các phần tử = ';
    for ($i = 0; $i <= count($arrs); $i++ ){
        if ($i == count($arrs))
            echo ' = ' ;
        else if ($i == count($arrs)-1 ){
            echo $arrs[$i];
        }else 
            echo $arrs[$i] .' - ';
    }
    $hieu = tinhHieu($arrs);
    echo $hieu .'<br>';

    echo 'Thương các phần tử = ';
    for ($i = 0; $i <= count($arrs); $i++ ){
        if ($i == count($arrs))
            echo ' = ' ;
        else if ($i == count($arrs)-1 ){
            echo $arrs[$i];
        }else 
            echo $arrs[$i] .' / ';
    }
    $thuong = tinhThuong($arrs);
    echo $thuong .'<br>';

?>