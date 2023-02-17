<?php 
function isArmstrong($num) {
  $sum = 0;
  $temp = $num;
  $digits = strlen($num);
  
  while ($temp != 0) {
    $remainder = $temp % 10;
    $sum += pow($remainder, $digits);
    $temp = (int) $temp / 10;
  }
  
  if ($num == $sum) {
    return true;
  } else {
    return false;
  }
}

$num1 = 153;
$num2 = 370;
$num3 = 371;
$num4 = 9474;

if (isArmstrong($num1)) {
  echo $num1 . " is an Armstrong number.\n";
} else {
  echo $num1 . " is not an Armstrong number.\n";
}

if (isArmstrong($num2)) {
  echo $num2 . " is an Armstrong number.\n";
} else {
  echo $num2 . " is not an Armstrong number.\n";
}

if (isArmstrong($num3)) {
  echo $num3 . " is an Armstrong number.\n";
} else {
  echo $num3 . " is not an Armstrong number.\n";
}

if (isArmstrong($num4)) {
  echo $num4 . " is an Armstrong number.\n";
} else {
  echo $num4 . " is not an Armstrong number.\n";
}
?>