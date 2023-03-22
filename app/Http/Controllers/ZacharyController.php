<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZacharyController extends Controller
{
    public function zachary (){
        return view ('pages.zachary');
    }
}
