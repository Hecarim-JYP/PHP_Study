<?php
    function makeException() {
        throw new Exception("Exception was threw.");
    }

    try {
        makeException();
    } catch (Exception $e) {
        echo "". $e->getMessage() ."";
    } finally {
        echo "<br> process was done.";
    }

?>