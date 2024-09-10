3. Returning Values
Functions can return values to the calling code.
 This is useful for performing calculations or processing data.

Example:

php
Copy code
<?php
    function add($a, $b) {
        return $a + $b;
    }

    $sum = add(5, 10);
    echo $sum; // Outputs: 15
?>
Explanation: The add function returns the sum of two numbers, 
which is then stored in the variable $sum and printed.