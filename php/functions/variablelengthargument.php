4. Variable-Length Argument Lists
PHP supports functions with a variable number of arguments
 using func_get_args(), func_num_args(), and ... (splat operator) in newer versions.

Example using ... (splat operator):

<?php
    function sum(...$numbers) {
        return array_sum($numbers);
    }

    echo sum(1, 2, 3, 4, 5); // Outputs: 15
?>
Explanation: The sum function uses the splat operator ... to accept a variable number 
of arguments and calculates their sum.