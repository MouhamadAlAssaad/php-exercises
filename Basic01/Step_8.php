<?php
$grocery = array('Eggs', 'Milk', 'Cheese', 'Water Pack', 'Tissues', 'Watermelon');
$first_three_items = array_slice($grocery, 0, 3);
$last_item = end($grocery);
$message = 'Hello Sir, do you have ' . implode(', ', $first_three_items) . '? Also if you sell fruits can I find a ' . $last_item . '?';
echo $message . '<br>';

$items = array(
  'eggs' => array('balade', 'mazere3'),
  'milk' => array('Fresh', 'Taanayel'),
  'water-pack' => array('Tanoureen', 'Reem')
);
$egg_brand = $items['eggs'][0];
$water_pack_brand = $items['water-pack'][1];
$message = "Hey Sir, Please I need 1 pack of $egg_brand eggs and 3 $water_pack_brand Water Pack.";
echo $message;

?>