<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frame;

class FrameController extends Controller
{
    //
    public function frames(){
        $allFrames = Frame::all();
        return view('frame.frames',['allFrames'=>$allFrames]);
    }
    public function frameDetails($id){
        $frame = Frame::find($id);
        return view('frame.frameDetails',['frame'=>$frame]);
    }
}
