<?php
function get_morse() {
    return $morse_codes = array(
          "A"=>".-",
          "B"=>"-...",
          "C"=>"-.-.",
          "D"=>"-..",
          "E"=>".",
          "F"=>"..-.",
          "G"=>"--.",
          "H"=>"....",
          "I"=>"..",
          "J"=>".---",
          "K"=>"-.-",
          "L"=>".-..",
          "M"=>"--",
          "N"=>"-.",
          "O"=>"---",
          "P"=>".--.",
          "Q"=>"--.-",
          "R"=>".-.",
          "S"=>"...",
          "T"=>"-",
          "U"=>"..-",
          "V"=>"...-",
          "W"=>".--",
          "X"=>"-..-",
          "Y"=>"-.--",
          "Z"=>"--..",
          "0"=>"-----",
          "1"=>".----",
          "2"=>"..---",
          "3"=>"...--",
          "4"=>"....-",
          "5"=>".....",
          "6"=>"-....",
          "7"=>"--...",
          "8"=>"---..",
          "9"=>"----.",
          "."=>".-.-.-",
          ","=>"--..--",
          "?"=>"..--..",
          "/"=>"-..-.",
          " "=>" "
      );
  }

  function possibilities($signals) {
  
    $signals = str_replace(['.','?'],['\.','[.-]'],$signals);
    $regexp = '~^'.$signals.'$~';
    $morse_codes = get_morse();
    $result = [];
  
    foreach ($morse_codes as $key => $value) {
        if (preg_match($regexp, $value)) { 
          $result[$value] = $key;
        }
    }
    krsort($result);
    return array_values($result);
  
}