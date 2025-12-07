<?php
$numbers = array(12, 15, 23, 35, 48, 53, 61, 74, 85, 99, 104, 113, 122);

// Filter even numbers
$evenNumbers = array_filter($numbers, function($num) {
    return $num % 2 == 0;
});

echo "Original Array: ";
print_r($numbers);

echo "<br>Even Numbers Array: ";
print_r($evenNumbers);
?>
