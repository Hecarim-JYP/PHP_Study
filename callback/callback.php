<?php
    function after() {
        echo "<script>
            console.log('after');
        </script>";
    }

    function before($callback) {
        echo "<script>
            console.log('before');
        </script>";
        return $callback();
    }

    before("after");
?>