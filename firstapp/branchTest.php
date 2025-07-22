<?php
    $test = 1;
    function get_arg() {
        $test = 13;
        global $test;
        $test = 1;
        echo $test;
    }
    get_arg();
    echo $test;
    # main
?>