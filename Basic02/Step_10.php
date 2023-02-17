<?php

function isPalindrome($str) {
    $reverseStr = strrev($str);
    if ($reverseStr == $str) { 
        return true; 
    } else {
        return false; 
    }
}

$inputStr = "hello"; 

if (isPalindrome($inputStr)) {
    echo $inputStr . " is a palindrome";
} else {
    echo $inputStr . " is not a palindrome";
}

?>