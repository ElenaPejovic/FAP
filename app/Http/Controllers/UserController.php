<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cabin;
use App\Models\Frame;
use App\Models\Trunk;

class UserController extends Controller
{
    //
    public function homepage(){
        return view('homepage');
    }
}
