<?php
$course_name = "Rust, the language of no bugs";
$enrolled_students = 20;
$price = 30.00;
$on_discount = true;
echo "Course title: $course_name<br>";
echo "Enrolled Students: $enrolled_students<br>";
echo "Course price: $price $ USD<br>";
echo "Course on discount: " . ($on_discount ? "Yes" : "No") . "<br>";
echo "Course not on discount: " . (!$on_discount ? "Yes" : "No") . "<br>";
?>