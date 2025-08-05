<?php
    class Car {
        public $Type;
        public $Name;

        public function __construct($Type, $Name) {
            $this->Type = $Type;
            $this->Name = $Name;
        }

        public function __destruct() {
            echo "Instance was Desructed.";
        }
    }

    $SUV = new Car("SUV", "QM6");

    echo $SUV->Type;
    echo "<br>";
    echo $SUV->Name;
    echo "<br>";

?>