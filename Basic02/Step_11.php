<?php
function is_prime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}


$number = 5;
if (is_prime($number)) {
    echo $number . " is prime.";
} else {
    echo $number . " is not prime.";
}
?>