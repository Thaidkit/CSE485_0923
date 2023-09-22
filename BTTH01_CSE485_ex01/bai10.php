<?php
    function upperCase($array){
        $upperCaseArr = [];
        foreach($array as $element){
            if($element != null ){
                $upperCaseE = strtoupper($element);
            }else
                $upperCaseE = '';
            $upperCaseArr[] = $upperCaseE;
        }
        return $upperCaseArr;
    }

    $arrs1 = ['1', 'b', 'c', 'd'];
    $upperCaseArr1 = upperCase($arrs1);
    print_r($upperCaseArr1);
    echo '<br>';
    $arrs2 = ['a', 0, null, false];
    $upperCaseArr2 = upperCase($arrs2);
    print_r($upperCaseArr2);
?>
