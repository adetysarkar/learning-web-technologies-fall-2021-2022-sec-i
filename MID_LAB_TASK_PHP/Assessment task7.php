<?php
function pattern($num)
{
    for ($i = 0; $i < $num; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo "* ";
        }
        echo "\n<br>";
    }
}
$num = 3;
pattern($num);

echo "<br>";

echo "<hr>";


function pattern1($n)
{
    $num = 65;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            $ch = chr($num);
            echo $ch . " ";
            $num = $num + 1;
        }
        echo "<br>";
    }
}
$n = 3;
pattern1($n);
?>