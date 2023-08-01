<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    public function frame(){
        return $this->hasOne(Frame::class);
    }
    public function cabin(){
        return $this->hasOne(Cabin::class);
    }
    public function trunk(){
        return $this->hasMany(Trunk::class);
    }
    public function vehicleType(){
        return $this->belongsTo(Type::class);
    }
    public function upgrade(){
        return $this->hasOne(Upgrade::class);
    }
}
