<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cabin;

class CabinController extends Controller
{
    //
    public function cabins(){
        $allCabins = Cabin::all();
        return view('cabin.cabins',['allCabins'=>$allCabins]);
    }
    public function cabinDetails($id){
        $cabin = Cabin::find($id);
        return view('cabin.cabinDetails',['cabin'=>$cabin]);
    }
}
