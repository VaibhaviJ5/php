1. User-Defined Functions
These are functions created by the user to perform specific tasks. 
They can take parameters and return values.

Definition and Example:


<?php
    // Function definition
    function greet($name) {
        return "Hello, " . $name . "!";
    }

    // Function call
    echo greet("Alice"); // Outputs: Hello, Alice!
?>
Explanation: The greet function takes one parameter $name and returns a greeting message.
 It is then called with the argument "Alice".