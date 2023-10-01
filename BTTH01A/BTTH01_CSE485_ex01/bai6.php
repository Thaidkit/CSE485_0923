<?php
    $keys = array(
        "field1"=>"first",
        "field2"=>"second",
        "field3"=>"third"
    );
    $values = array(
        "field1value"=>"dinosaur",
        "field2value"=>"pig",
        "field3value"=>"platypus"
    );
    $keysAndValues = array();
    // kiem tra ton tai key trong mang values
    foreach ($keys as $key => $value) {
        $existKey = $key ."value";
        if (array_key_exists($existKey, $values)) {
            $keysAndValues[$value] = $values[$existKey];
        }
    }
    
    // Hiển thị mảng $keysAndValues
    print_r($keysAndValues);
?>