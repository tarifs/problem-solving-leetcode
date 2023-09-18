<?php

function reverseVowels($s) {
    // Convert the input string into an array of characters
    $strToArr = str_split($s);

    // Define an array of vowels
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

    // Initialize left and right pointers
    $left = 0;
    $right = count($strToArr) - 1;

    // Iterate through the array and swap vowels
    while ($left < $right) {
        // Find the first vowel from the left
        while ($left < $right && !in_array($strToArr[$left], $vowels)) {
            $left++;
        }

        // Find the first vowel from the right
        while ($left < $right && !in_array($strToArr[$right], $vowels)) {
            $right--;
        }

        // Swap the vowels
        $temp = $strToArr[$left];
        $strToArr[$left] = $strToArr[$right];
        $strToArr[$right] = $temp;

        // Move the pointers
        $left++;
        $right--;
    }

    // Convert the array back to a string
    $result = implode('', $strToArr);

    return $result;
}

// Test the function
$input = "leetcode";
$output = reverseVowels($input);
echo $output; // Output: "leotcede"
