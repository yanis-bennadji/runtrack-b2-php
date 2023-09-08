<?php
function my_str_reverse(string $string): string {
    $reversed = '';
    $i = 0;

    while (isset($string[$i])) {
        $i++;
    }

    while ($i > 0) {
        $i--;
        $reversed .= $string[$i];
    }

    return $reversed;
}

$originalString = "Hello, world!";
$reversedString = my_str_reverse($originalString);

echo "Chaîne inversée : $reversedString";

