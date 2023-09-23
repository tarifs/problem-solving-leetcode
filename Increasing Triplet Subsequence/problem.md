# [Increasing Triplet Subsequence](https://leetcode.com/problems/increasing-triplet-subsequence/?envType=study-plan-v2&envId=leetcode-75)

## Solution Approach:

1. Initialize Variables: Initialize two variables, first and second, with the maximum possible integer value (e.g., PHP_INT_MAX) to store the smallest and second smallest elements found so far.


2. Iterate Through the Array:

    for each element num in the input array nums, do the following:
    
    If num is less than or equal to first, update first with num. This means we found a new smallest element.
    
    else if num is less than or equal to second, update second with num. This means we found a new second smallest element.
    
    if num is greater than both first and second, we found a third element that is greater than both the smallest and second smallest elements, which satisfies the increasing triplet condition. Return true.


3. Return false: If the loop completes without finding an increasing triplet, return false because no such triplet exists.