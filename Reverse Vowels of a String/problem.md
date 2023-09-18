# [Reverse Vowels of a String](https://leetcode.com/problems/reverse-vowels-of-a-string)

## Solution Approach:

1. Convert the input string into an array of characters.
2. Initialize two pointers, one starting from the beginning of the array (left pointer) and the other starting from the end of the array (right pointer).
3. Iterate through the array using these pointers, and when you encounter vowels from both sides, swap them.
4. Continue this process until the left pointer is less than or equal to the right pointer.
5. Finally, convert the array back to a string and return it as the result.