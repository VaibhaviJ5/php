<!-- Type Juggling
PHP automatically converts between types as needed.
 For example, if you add an integer to a string, PHP will convert the string to a number. -->

Example:


<?php
    $num = 10;
    $str = "20";

    $result = $num + $str; // PHP converts $str to integer 20
    echo $result; // Outputs 30
?>


Explanation: PHP handles type juggling automatically, allowing mixed-type operations.

