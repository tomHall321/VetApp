<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use App\Models\Animal;

class Treatment extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    public $timestamps = false;

    public function animals()
    {
        return $this->belongsToMany(Animal::class);
    }

    public static function fromStrings(array $strings): Collection
    {
        return collect($strings)->map(fn($str) => trim($str))
        ->unique()
        ->map(fn($str) => Treatment::firstOrCreate(["name" => $str]));
    } 

}
