<?php
    $i = "zerg@_dark@naver.com";

    $j = filter_var($i, FILTER_VALIDATE_EMAIL);
    
    if($j == "") {
        echo "UNABLED VALUE : " . $j;
    } else {
        echo "ENABELD VALUE : " . $j;
    }
    
?>