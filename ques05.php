<?php
function calculateAndDisplayResults($num1, $num2) {
    $sum = $num1 + $num2;
    $difference = $num1 - $num2;
    $product = $num1 * $num2;
    
    // Check for division by zero to avoid errors
    if ($num2 != 0) {
        $quotient = $num1 / $num2;
    } else {
        $quotient = "Undefined (division by zero)";
    }
    
    echo "Sum: " . $sum . "<br>";
    echo "Difference: " . $difference . "<br>";
    echo "Product: " . $product . "<br>";
    echo "Quotient: " . $quotient;
}

// Example usage:
$num1 = 70;
$num2 = 5;
calculateAndDisplayResults($num1, $num2);
?>
