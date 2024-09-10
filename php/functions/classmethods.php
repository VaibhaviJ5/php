7. Method Types in Classes
In PHP object-oriented programming, methods are functions defined within a class. 
They can be public, private, or protected.

Example:

<?php
    class Car {
        public $make;
        private $model;

        // Constructor method
        function __construct($make, $model) {
            $this->make = $make;
            $this->model = $model;
        }

        // Public method
        public function displayInfo() {
            return "Make: " . $this->make . ", Model: " . $this->model;
        }

        // Private method
        private function getModel() {
            return $this->model;
        }
    }

    $myCar = new Car("Toyota", "Corolla");
    echo $myCar->displayInfo(); // Outputs: Make: Toyota, Model: Corolla

    // The following line will cause an error because getModel() is private
    // echo $myCar->getModel();
?>
Explanation:

1. __construct is a special constructor method that initializes an object.
2. displayInfo is a public method that can be accessed from outside the class.
3. getModel is a private method accessible only within the class.