<?php
    class Student {
        public $studentId;
        public $studentName;

        /*

        function setStudentId($studentId) {
            $this->studentId = $studentId;
        }

        function setStudentName($studentName) {
            $this->studentName = $studentName;
        }

        function getStudentId() {
            return $this->studentId;
        }

        function getStudentName() {
            return $this->studentName;
        }

        */public function __construct($studentId, $studentName) {
            $this->studentId = $studentId;
            $this->studentName = $studentName;
        }
    }

    /*
    $JYP = new Student();
    $JYP->setStudentId("1");
    $JYP->setStudentName("Park");
    */
    $JYP = new Student("11", "PARK");

    echo $JYP->studentId;
    echo "<br>";
    echo $JYP->studentName;

?>