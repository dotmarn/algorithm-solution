<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $count = 1;
        $result = [];
        foreach($nums as $key => $value) {
            $sum = $value + $nums[$count + $key];
            if($sum == $target) {
                $result = [$key, $count + $key];
            }
        }
        
        return $result;
    }
}