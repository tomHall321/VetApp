<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

class Owners extends Controller
{

    public function owner()
    {
        // return $owner = Owner::paginate(15);
        return view("owners", [
            "owners" => Owner::all()
            ]);
    }

    public function show(Owner $owner)
    {
        return view("owners", [
            "owners" => $owner
            ]);
    }

}
  
