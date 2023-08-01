<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Types;

class TypeController extends Controller
{
    //
    public function types(){
        $allTypes = Types::all();
        return view('type.types',['allTypes'=>$allTypes]);
    }
}
