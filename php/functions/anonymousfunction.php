5. Anonymous Functions (Closures)
Anonymous functions, also known as closures, are functions without a name.
 They are often used as callback functions.

Example:


<?php
    $multiply = function($a, $b) {
        return $a * $b;
    };

    echo $multiply(3, 4); // Outputs: 12
?>
Explanation: An anonymous function is assigned to the $multiply variable and then called with arguments 3 and 4.