<?php

class Solution {

    /**
     * @param String $digits
     * @return String[]
     */
    function letterCombinations($digits) {
        
        $map = [
            "2" => ["a", "b", "c"],
            "3" => ["d", "e", "f"],
            "4" => ["g", "h", "i"],
            "5" => ["j", "k", "l"],
            "6" => ["m", "n", "o"],
            "7" => ["p", "q", "r", "s"],
            "8" => ["t", "u", "v"],
            "9" => ["w", "x", "y", "z"]
        ];
        
        if($digits == "") {
            return [];
        }
        
        $length = strlen($digits);
        
        if ($length == 1) {
            return $map[$digits];
        } else {

            $res = $map[$digits[0]];
            
            for ($i=1; $i < $length; $i++) {
                $temp = [];
                foreach ($map[$digits[$i]] as $ch) {
                    foreach ($res as $r) {
                        $temp[] = $r . $ch;
                    }
                }
                $res = $temp;
            }
            
            return $res;
        }
        
    }
}