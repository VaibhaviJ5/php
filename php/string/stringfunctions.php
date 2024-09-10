<!-- 4. String Functions
PHP provides numerous built-in functions for string manipulation. Here are some commonly used ones: -->



strlen: Returns the length of a string.

strtoupper: Converts string to uppercase.

strtolower: Converts string to lowercase.

ucfirst: Capitalizes the first character of a string.

ucwords: Capitalizes the first character of each word.

strpos: Finds the position of the first occurrence of a substring.

strrpos: Finds the position of the last occurrence of a substring.

substr: Returns a portion of a string.

str_replace: Replaces occurrences of a substring.

preg_replace: Performs regular expression search and replace.

explode: Splits a string into an array by a delimiter.

implode: Joins array elements into a string.

trim: Removes whitespace from both ends of a string.

ltrim: Removes whitespace from the beginning of a string.

rtrim: Removes whitespace from the end of a string.

str_repeat: Repeats a string a specified number of times.
str_split: Converts a string into an array of characters.


<h1>a. strlen: Returns the length of a string.</h1>

<?php
    $string = "Hello, World!";
    echo strlen($string); // Outputs: 13
?>


<h1>b. strtoupper: Converts a string to uppercase.</h1>


<?php
    $string = "Hello, World!";
    echo strtoupper($string); // Outputs: HELLO, WORLD!
?>



<h1>c. strtolower: Converts a string to lowercase.</h1>
<?php
    $string = "Hello, World!";
    echo strtolower($string); // Outputs: hello, world!
?>


<h1>d. strpos: Finds the position of the first occurrence of a substring.</h1>
<?php
    $string = "Hello, World!";
    echo strpos($string, "World"); // Outputs: 7
?>


<h1>e. substr: Returns a portion of a string.</h1>
<?php
    $string = "Hello, World!";
    echo substr($string, 7, 5); // Outputs: World
?>




<h1>f. trim: Removes whitespace from the beginning and end of a string.</h1>
<?php
    $string = "   Hello, World!   ";
    echo trim($string); // Outputs: Hello, World!
?>



<h1>g. str_replace: Replaces all occurrences of a substring with another substring.</h1>
<?php
    $string = "Hello, World!";
    echo str_replace("World", "PHP", $string); // Outputs: Hello, PHP!
?>



<h1>h. explode: Splits a string by a specified delimiter into an array.</h1>
<?php
    $string = "apple,banana,orange";
    $array = explode(",", $string);
    print_r($array); // Outputs: Array ( [0] => apple [1] => banana [2] => orange )
?>


<h1>i. implode: Joins array elements into a single string with a specified delimiter.</h1>
<?php
    $array = array("apple", "banana", "orange");
    echo implode(",", $array); // Outputs: apple,banana,orange
?>


<h1>j. sprintf: Returns a formatted string.</h1>
<?php
    $number = 123.456;
    echo sprintf("The number is %.2f", $number); // Outputs: The number is 123.46
?>


15. rtrim
Definition: Removes whitespace or other predefined characters from the end of a string.

Example:

<?php
    $string = "   Hello, World!   ";
    echo rtrim($string); // Outputs:    Hello, World!
?>

14. ltrim
Definition: Removes whitespace or other predefined characters from the beginning of a string.

Example:

<?php
    $string = "   Hello, World!   ";
    echo ltrim($string); // Outputs: Hello, World!   
?>
Explanation: ltrim removes whitespace from the start of the string.


16. str_repeat
Definition: Repeats a string a specified number of times.

Example:

<?php
    $string = "Hello!";
    echo str_repeat($string, 3); // Outputs: Hello!Hello!Hello!
?>
Explanation: str_repeat repeats the string "Hello!" three times.



17. str_split
Definition: Converts a string into an array of characters.

Example:

<?php
    $string = "Hello";
    print_r(str_split($string)); // Outputs: Array ( [0] => H [1] => e [2] => l [3] => l [4] => o )
?>
Explanation: str_split splits the string into an array where each element is a single character.

10. preg_replace
Definition: Performs a regular expression search and replace.

Example:

<?php
    $string = "Hello, 123 World!";
    echo preg_replace("/\d+/", "", $string); // Outputs: Hello,  World!
?>
Explanation: preg_replace removes all digits from the string using a regular expression.



9. str_replace
Definition: Replaces all occurrences of a search string with a replacement string.

Example:
<?php
    $string = "Hello, World!";
    echo str_replace("World", "PHP", $string); // Outputs: Hello, PHP!
?>
Explanation: str_replace replaces "World" with "PHP" in the string.


7. strrpos
Definition: Finds the position of the last occurrence of a substring in a string.

Example:
<?php
    $string = "Hello, World! Welcome to the World!";
    echo strrpos($string, "World"); // Outputs: 25
?>
Explanation: strrpos returns the position of the last occurrence of "World".


5. ucwords
Definition: Capitalizes the first character of each word in a string.

Example:

<?php
    $string = "hello, world!";
    echo ucwords($string); // Outputs: Hello, World!
?>
Explanation: ucwords capitalizes the first letter of each word separated by spaces.


4. ucfirst
Definition: Capitalizes the first character of a string.

Example:
<?php
    $string = "hello, world!";
    echo ucfirst($string); // Outputs: Hello, world!
?>
Explanation: ucfirst capitalizes only the first character of the string.