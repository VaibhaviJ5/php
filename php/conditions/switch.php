The switch statement is a cleaner way to handle multiple conditions based on the value of a variable.

<?php

$day = 3;

switch ($day) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    default:
        echo "Weekend";
        break;
}

?>