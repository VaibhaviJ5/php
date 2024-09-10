<!-- 7. NULL
The NULL data type represents a variable with no value. A variable of type NULL has no value assigned to it. -->

Example:


<?php
    $var = NULL;
    echo $var; // Will output nothing

    if (is_null($var)) {
        echo "The variable is NULL.";
    }
?>


Explanation: NULL is used to explicitly specify that a variable has no value.