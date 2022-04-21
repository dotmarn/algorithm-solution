<?php
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        
        $combined = array_merge($nums1, $nums2);
        
        sort($combined);
        
        $combined_array_size = count($combined);
        
        $remainder = $combined_array_size % 2;
        
        $median = 0;

        if ($remainder == 0) {
            // means the combined array is even
            $half = $combined_array_size / 2;

            $median = ($combined[$half - 1] + $combined[$half]) / 2;

        } else {
            //means the combined array is odd
            $mid_index = ($combined_array_size - 1) / 2;

            $median = $combined[($mid_index)];
        }
        
        return $median;
    }
}