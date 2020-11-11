<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Owner extends Model
{
    use HasFactory;

    public function fullName()
    {   
        return "{$this->first_name} {$this->last_name}";
    }

    public function fullAddress()
    {   
        return "{$this->address_1} {$this->address_2} {$this->town} {$this->postcode}";
    }
    
    public function formattedPhoneNumber()
    {
        $this->telephone = implode(' ', str_split($this->telephone, 4));
        return $this->telephone;
    }

    public static function getBristolAddress() //static method 
    {
        $bristolOwners = Owner::where('town', 'Bristol')->orderBy('id')->get();
        return $bristolOwners;

        //Owner::getBristolAddress() to call
    }

    public static function alphabeticalLastNameOrder() //static method 
    {
        $alphabeticalLastNameOrder = Owner::orderBy('last_name', 'desc')->get();
        return $alphabeticalLastNameOrder;

        //Owner::alphabeticalLastNameOrder() to call
    }

    public static function phoneNumbersStartingwithZero() //static method 
    {
        $phoneNumbersStartingwithZero = Owner::where('telephone', 'like', '0%')->get();
        return $phoneNumbersStartingwithZero;

        //Owner::phoneNumbersStartingwithZero() to call
    }


}
