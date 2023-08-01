<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trunk;

class TrunkController extends Controller
{
    //
    public function trunks(){
        $allTrunks = Trunk::all();
        return view('trunk.trunks',['allTrunks'=>$allTrunks]);
    }
    public function trunkDetails($id){
        $trunk - Trunk::find($id);
        return view('trunk.trunkDetails',['trunk'=>$trunk]);
    }
}
