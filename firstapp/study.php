<?php
    function test(int $object, int $target): int {

        $rtn = 0;

        while (true) {
            if ($object > $target) {
                $object -= $target;
            }
            
            if($object < $target) {
                $rtn = $object;
                break;
            }
        }

        return $rtn;
    }

    echo test(202, 19);#
?>