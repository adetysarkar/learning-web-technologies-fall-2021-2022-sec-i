<?php
$name = array("adety", "nabil", "zubaida", "tamim");
if (in_array("nabil", $name)) {
    echo "Item found in array";
} else {
    echo "Item not found";
}

function print_pattern($num)
{
    for ($i = 0; $i < $num; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo "* ";
        }
        echo "\n";
    }
}
$num = 3;
print_pattern($num);