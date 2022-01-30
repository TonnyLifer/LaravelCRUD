<?php

namespace App\Http\Controllers;

use App\Models\Phone;

class PhoneController extends Controller
{
    public function index(){
        $phone = Phone::where('number',333)->first();
        
            dump($phone);
        

    }

}
