<?php

namespace App\Models;


class Cracker
{   
    private $dictionary = [
        "a" => "!",
        "b" => ")",
        "c" => "#",
        "d" => "(",
        "e" => ".",
        "f" => "*",
        "g" => "%",
        "h" => "&",
        "i" => ">",
        "j" => "<",
        "k" => "@",
        "l" => "a",
        "m" => "b",
        "n" => "c",
        "o" => "d",
        "p" => "e",
        "q" => "f",
        "r" => "g",
        "s" => "h",
        "t" => "i",
        "u" => "j",
        "v" => "k",
        "w" => "l",
        "x" => "m",
        "y" => "n",
        "z" => "o",
        " " => " ",
    ];

    public function decrypt($input) 
    {
        $result = "";
        $inputSplit = str_split($input); 
      
        foreach($inputSplit as $value) {
            
            foreach ($this->dictionary as $key => $pair) {
                if ($value === $pair) {
                    $result .= $key;
                }
            }    
        }
        
        return $result;
    }

}