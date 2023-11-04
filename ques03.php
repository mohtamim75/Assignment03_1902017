<?php
function countVowels($inputString) {
    // Convert the input string to lowercase to treat uppercase and lowercase letters as equivalent
    $inputString = strtolower($inputString);

    // Define an array of vowels
    $vowels = ['a', 'e', 'i', 'o', 'u'];

    // Initialize a counter for vowels
    $vowelCount = 0;

    // Loop through each character in the input string
    for ($i = 0; $i < strlen($inputString); $i++) {
        $char = $inputString[$i];

        // Check if the character is a vowel
        if (in_array($char, $vowels)) {
            $vowelCount++;
        }
    }

    return $vowelCount;
}

$inputString = "Hello, world!";
$vowelCount = countVowels($inputString);
echo "Number of vowels: " . $vowelCount;
?>