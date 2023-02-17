<?php

$birth_year = 2000;
$current_year = date('Y');
if ($current_year - $birth_year > 18){
    echo "You can drive";
} else {
    echo "You are still a kid, go and play GTA";
}

?>