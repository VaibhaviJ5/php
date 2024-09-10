8. Static Methods
Static methods belong to the class rather than any instance of the class.
 They are called using the class name.

Example:

<?php
    class Math {
        public static function square($number) {
            return $number * $number;
        }
    }

    echo Math::square(5); // Outputs: 25
?>
Explanation: The square method is declared static and is called using Math::square
 without creating an instance of the class.