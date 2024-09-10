2. Function Parameters
Functions can accept parameters (arguments) and return values. 
Parameters can be optional or have default values.

Example with Default Parameters:


<?php
    function greet($name = "Guest") {
        return "Hello, " . $name . "!";
    }

    echo greet();        // Outputs: Hello, Guest!
    echo greet("Bob");  // Outputs: Hello, Bob!
?>
Explanation: The greet function has a default parameter value of "Guest". 
If no argument is passed, it uses the default value.