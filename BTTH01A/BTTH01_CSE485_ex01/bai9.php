<?php
    function lowerCase($array){
        $lowerCaseArr = [];
        foreach($array as $element){
            if($element != null ){
                $lowerCaseE = strtolower($element);
            }else
                $lowerCaseE = '';
            $lowerCaseArr[] = $lowerCaseE;
        }
        return $lowerCaseArr;
    }

    $arrs1 = ['1', 'B', 'C', 'E'];
    $lowerCaseArr1 = lowerCase($arrs1);
    print_r($lowerCaseArr1);
    echo '<br>';
    $arrs2 = ['a', 0, null, false];
    $lowerCaseArr2 = lowerCase($arrs2);
    print_r($lowerCaseArr2);
?>