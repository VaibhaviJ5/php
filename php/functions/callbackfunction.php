6. Callback Functions
A callback function is a function that is passed as an argument to another function 
and is executed within that function.

Example:


<?php
    function processArray($array, $callback) {
        foreach ($array as $item) {
            echo $callback($item) . "<br>";
        }
    }

    $callback = function($item) {
        return $item * 2;
    };

    processArray([1, 2, 3, 4], $callback);
?>
Explanation: The processArray function takes an array and a callback function, 
applying the callback to each element of the array.