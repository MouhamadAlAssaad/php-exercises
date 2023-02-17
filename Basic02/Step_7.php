<?php
$input = "I love Python. Python is awesome!"; 
$replacements = array("Python" => "PHP", "PHP" => " PHP");
$output = strtr($input, $replacements); 
echo $output; 
?>