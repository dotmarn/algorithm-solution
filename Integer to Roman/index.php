<?php 

class Solution {
    function intToRoman($num) {

        $num_to_convert = intval($num);
        
        $res = '';

        $data = [
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1
        ];
        
        foreach ($data as $key => $value) {
            
            $matches = intval($num_to_convert / $value);

            if ($matches !== 0) {
                $res .= str_repeat($key, $matches);
            }

            $num_to_convert %= $value;

            if ($num_to_convert === 0) {
                return $res;
            }
        }
        
        return $res;
    }
}