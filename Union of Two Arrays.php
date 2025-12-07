<?php
$arr1 = array(22, 24, 26, 28, 30, 32);
$arr2 = array(35, 40, 45, 50, 55, 60, 65);

// Merge arr1 with sliced arr2 (from index 2 onwards)
$result = array_merge($arr1, array_slice($arr2, 2));

echo "First Array: ";
print_r($arr1);

echo "<br>Second Array: ";
print_r($arr2);

echo "<br>Resultant Array: ";
print_r($result);
?>
