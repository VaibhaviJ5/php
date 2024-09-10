1. String Literals
String literals are sequences of characters enclosed in either single quotes (') or double quotes (").

Single-Quoted Strings:

Single-quoted strings are treated as literal text. Special characters, including escape sequences like \n (new line) or \t (tab), are not processed.
Variables are not interpolated.
example:

<?php
    $name = 'Alice';
    echo 'Hello, $name!'; // Outputs: Hello, $name!
?>



Double-Quoted Strings:

Double-quoted strings support variable interpolation and special escape sequences.
Example:


<?php
    $name = "Alice";
    echo "Hello, $name!"; // Outputs: Hello, Alice!
?>
Explanation: Double-quoted strings allow variables to be parsed within the string,
 while single-quoted strings do not.
