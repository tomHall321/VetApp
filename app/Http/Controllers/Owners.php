<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

class Owners extends Controller
{

    public function owner()
    {
        return view("owners/index", [
            "owners" => Owner::all()
        ]);
        
    }

    public function show(Owner $owner)
    {
        return view("owners/show", [
            "owners" => $owner
            ]);
    }

}