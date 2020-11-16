<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Owner extends Model
{   
    protected $fillable = ["first_name", "last_name", "telephone", "email", "address_1", "address_2", "town", "postcode"];
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

    public static function haveWeBananas($number)
    {
        if ($number === 0) {
            return "No we have no bananas";
        } 
        if ($number === 1){
            return "Yes we have {$number} banana";
        }  
        return "Yes we have {$number} bananas";
        
    }

    public static function givenEmailExists($email) //static method 
    {
        $givenEmailExists = Owner::where('email', '=', $email)->get();
        return $givenEmailExists;
        // if ($givenEmailExists = null){
        //     echo('this email already exists');}
        //     else {echo('this email does not exist');}
        
        //Owner::givenEmailExists() to call
    }

    public static function validPhoneNumber($telephone)
    {
        if (strlen($telephone) < 10 || strlen($telephone) > 14) {
            return false;
        } 
        else if (preg_match("/[a-z]/i", $telephone)) {
            return false;
        }
       return true;
        }    
    
    }
