<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Frame;
use App\Models\Cabin;
use App\Models\Trunk;
use App\Models\Types;
use App\Models\Upgrade;

class AdminController extends Controller
{
    //
    public function dealsForm(){
        return view('deals',[
            'allFrames'=>Frame::all(),
            'allCabins'=>Cabin::all(),
            'allTrunks'=>Trunk::all(),
            'allTypes'=>Types::all(),
            'allUpgrades'=>Upgrade::all()
        ]);
    }
    public function deals(Request $request){
        $vehicle = new Vehicle();
        $vehicle->serial_number = $request->input('serial_number');
        $vehicle->type_id = $request->input('type_id');
        $vehicle->cabin_id = $request->input('cabin_id');
        $vehicle->frame_id = $request->input('frame_id');
        $vehicle->trunk_id = $request->input('trunk_id');
        $vehicle->upgrade_id = $request->input('upgrade_id');
        $vehicle->status = 'Processing';
        $vehicle->save();
        return redirect(route('homepage'));
    }
    public function listDeals(){
        return view('listDeals',['allVehicles'=>Vehicle::all()]);
    }
    public function dealDetails($id){
        $vehicle = Vehicle::find($id);
        return view('dealDetails',['vehicle'=>$vehicle]);
    }
    public function changeStatus(Request $request, $id){
        $deal = Vehicle::find($id);
        $deal->status = $request->input('status','0');
        $deal->save();
        return redirect(route('list-deals'));
    }
}
