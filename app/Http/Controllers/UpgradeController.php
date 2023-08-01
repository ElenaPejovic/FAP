<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upgrade;

class UpgradeController extends Controller
{
    //
    public function upgrades(){
        $allUpgrades = Upgrade::all();
        return view('upgrade.upgrades',['allUpgrades'=>$allUpgrades]);
    }
    public function upgradeDetails($id){
        $upgrade = Upgrade::find($id);
        return view('upgrade.upgradeDetails',['upgrade'=>$upgrade]);
    }
}
