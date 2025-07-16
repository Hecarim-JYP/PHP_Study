<?php
    function asd($arg) {
        for ($i = 0; $i < 10; $i++) {
            echo $i;
            if ($i == 9) {
                echo "<br>";
            }
        }
    }

    asd(1);
    asd(1);
    asd(1);
    print asd(1);
?>
