<?php
$num = 3; 
$factorial = 1;
$i = $num;

while ($i > 1) {
    $factorial *= $i;
    $i--;
}

echo "The factorial of $num is $factorial";
?>