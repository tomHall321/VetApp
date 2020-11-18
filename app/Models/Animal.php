<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Owner;
use App\Models\Treatment;

class Animal extends Model
{   
    protected $fillable = ["id", "name", "date_of_birth", "biteyness", "type", "height", "weight"];

    
    use HasFactory;

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function dangerous()
    {
        return $this->integerBitey >= 3;
    }

    public function treatments()
    {
        return $this->belongsToMany(Treatment::class);
    }   

    public function setTreatments(array $strings): Animal
    {
        $treatments = Treatment::fromStrings($strings);
        
        $this->treatments()->sync($treatments->pluck("id"));
        return $this;
    }

}