<?php
    $arr = ["JYP" => "1993", "JSP" => "1988", "JHP" => "1987"];

    $target = json_encode($arr);

    $obj1 = json_decode($target, associative: false);
    $obj2 = json_decode($target, true);

    /*
    echo $target;
    echo "<br>";
    echo $obj1->JYP;
    echo "<br>";
    echo $obj2["JYP"];
    */

    foreach ($obj1 as $key => $value) {
        echo "key = ". $key ." : value = ". $value . "<br>";
    }

    echo "<br>";

    foreach ($obj2 as $value) {
        echo "key = ". $value. "<br>";
    }
?>