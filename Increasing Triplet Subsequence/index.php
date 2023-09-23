<?php

function increasingTriplet($nums) {
    $n = count($nums);
    if ($n < 3) {
        return false; // The array doesn't have enough elements to form a triplet.
    }

    $first = PHP_INT_MAX; // Initialize with the maximum possible integer value.
    $second = PHP_INT_MAX; // Initialize with the maximum possible integer value.

    foreach ($nums as $num) {
        if ($num <= $first) {
            $first = $num; // Update the smallest element found so far.
        } elseif ($num <= $second) {
            $second = $num; // Update the second smallest element found so far.
        } else {
            return true; // We found a third element greater than both first and second.
        }
    }

    return false; // No increasing triplet subsequence found.
}

// Example usage:
$nums = [1, 2, 3, 4, 5];
$result = increasingTriplet($nums);
echo $result ? "True" : "False"; // Output: True, as [1, 2, 3] is a valid increasing triplet subsequence.

