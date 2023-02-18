<?php
$text = "The apple is red , apple is good";
$search_word = "apple";
$words = explode(" ", $text);
$count = 0;
$i = 0;
while ($i < count($words)) {
    if (strtolower($words[$i]) == strtolower($search_word)) {
        $count++;
    }
    $i++;
}
echo "The word '$search_word' appears $count times in the sentence.";
?>