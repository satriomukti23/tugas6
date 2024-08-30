<?php

    class animal {
        public $name;
        public $legs;
        public $cold_blooded;

        public function __construct($name, $legs, $cold_blooded) {
            $this->name = $name;
            $this->legs = $legs;
            $this->cold_blooded = $cold_blooded;
        }

        public function introduce() {
            echo "Hello, I'm a " . $this->name . "<br>";
        }

        public function haveLegs () {
            echo $this->name . " have " . $this->legs . " legs" ."<br>";
        }
        public function isColdblood() {
            echo $this->name . " Have a " . $this->cold_blooded. " cold blooded"."<br>";
        }
    };
?>