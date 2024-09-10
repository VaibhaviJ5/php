<!-- 6. Object
An object is an instance of a class. Objects can store data and methods for manipulating that data. -->

Example:


<?php
    class Car {
        public $make;
        public $model;

        function __construct($make, $model) {
            $this->make = $make;
            $this->model = $model;
        }

        function display() {
            return "Make: " . $this->make . ", Model: " . $this->model;
        }
    }

    $myCar = new Car("Toyota", "Corolla");
    echo $myCar->display();
?>


Explanation: The Car class defines a structure for car objects, with properties (make, model) and a method (display).