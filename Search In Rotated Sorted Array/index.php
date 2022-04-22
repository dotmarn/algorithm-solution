<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        $index = array_search($target, $nums);
        if ($index !== false) {
            return $index;
        } else {
            return -1;
        }
    }
}