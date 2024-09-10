3. Nowdoc Syntax
Nowdoc syntax is similar to Heredoc but does not parse variables inside the string. 
It is like single-quoted strings but for multi-line text.

Example:

<?php
    $nowdoc = <<<'EOD'
    Hello, $name!
    This is a Nowdoc example.
    EOD;

    echo $nowdoc;
?>
Explanation: The <<<'EOD' syntax starts a Nowdoc string. 
Variables are not interpolated, and the content is treated as a literal.