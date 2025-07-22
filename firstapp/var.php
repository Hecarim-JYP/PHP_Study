<?php
    #global $test;# = 1;
    $test = 9;
    function get_arg() {
        #$test = 13;
        global $test;
        $test = 1;
        #echo $test;
    }
    get_arg();
    #echo $test;
?>