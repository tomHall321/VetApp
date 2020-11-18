<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Owner;

class Animal extends Model
{
    use HasFactory;

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public static function dangerous($biteyness)
    {
        if ($biteyness > 3) {
            return true;
        } 
        else return false;
    //Animal::dangerous() to call
    }    
}
