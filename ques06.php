<?php
$numbers = array(2, 4, 6, 8, 10);

// i. Print the first element of the array.
echo "First Element: " . $numbers[0] . "<br>";

// ii. Print the last element of the array.
echo "Last Element: " . end($numbers) . "<br>";

// iii. Add a new element with the value of 12 to the end of the array.
$numbers[] = 12;
echo "New array after adding 12: " . implode(",", $numbers) . "<br>";

// iv. Calculate the sum of all the elements in the array and print the result.
$sum = array_sum($numbers);
echo "Sum of all the elements: " . $sum . "<br>";
?>
