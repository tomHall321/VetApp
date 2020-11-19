<?php

namespace App\Models;


class FizzBuzz
{
    public function forNumber(int $input) : string
    {   
        $output = "";
        
        if ($input % 3 === 0){
            $output .= "Fizz";
        }

        if ($input % 5 === 0){
            $output .= "Buzz";
         }

        if ($input % 7 === 0){
            $output .= "Rarr";
        }
    
       return $output === "" ? (string)$input : $output;

    }
}
