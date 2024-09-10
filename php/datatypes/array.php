<!-- 5. Array
An array is a collection of values indexed by keys. PHP supports both indexed arrays and associative arrays. -->

<!-- Indexed Array Example: -->

<?php
    $colors = array("red", "green", "blue");
    foreach ($colors as $color) {
        echo $color . "<br>";
    }
?>




<!-- Associative Array Example: -->

<?php
    $person = array("first_name" => "John", "last_name" => "Doe", "age" => 30);
    echo "First Name: " . $person["first_name"] . "<br>";
    echo "Last Name: " . $person["last_name"] . "<br>";
    echo "Age: " . $person["age"];
?>
Explanation: Indexed arrays use numeric indices, while associative arrays use named keys to access values.