<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use Carbon\Carbon;

class Home extends Controller
{
    
    public function greeting()
    {   
        date_default_timezone_set('Europe/London');
        $dt = Carbon::now();
        $hrs = (int)$dt->format("H");
        $msg = "";
        if ($hrs >=  0) $msg = "Good Morning"; 
        if ($hrs >= 12) $msg = "Good afternoon";   
        if ($hrs >= 17) $msg = "Good evening";    

        return view('home', [
            "messageYeh" => $msg
            ]);
    }
       
}


