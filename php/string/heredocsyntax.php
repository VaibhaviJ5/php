2. Heredoc Syntax
Heredoc syntax is used for creating strings over multiple lines.
 It is similar to double-quoted strings but can be more readable.

Example:


<?php
    $heredoc = <<<EOD
    Hello, $name!
    This is a Heredoc example.
    EOD;

    echo $heredoc;
?>
<!-- Explanation: The <<<EOD syntax starts a Heredoc string, and EOD; ends it.
 This allows for multi-line strings with variable interpolation. -->