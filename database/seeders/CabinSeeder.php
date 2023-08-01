<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cabin;

class CabinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cabin = new Cabin();
        $cabin->serial_number = '4923F';
        $cabin->material = 'Steel';
        $cabin->seat_number = '2';
        $cabin->save();
        
        $cabin = new Cabin();
        $cabin->serial_number = 'A1B2C3D';
        $cabin->material = 'Aluminum';
        $cabin->seat_number = '3';
        $cabin->save();
        
        $cabin = new Cabin();
        $cabin->serial_number = 'N3P5Q6R';
        $cabin->material = 'Fiberglass';
        $cabin->seat_number = '4';
        $cabin->save();
        
        $cabin = new Cabin();
        $cabin->serial_number = 'V4W9X2Y';
        $cabin->material = 'Steel';
        $cabin->seat_number = '2';
        $cabin->save();
        
        $cabin = new Cabin();
        $cabin->serial_number = 'R1S8T3U';
        $cabin->material = 'Aluminum';
        $cabin->seat_number = '2';
        $cabin->save();
        
        $cabin = new Cabin();
        $cabin->serial_number = 'E5F0G6H';
        $cabin->material = 'Fiberglass';
        $cabin->seat_number = '3';
        $cabin->save();
        
        $cabin = new Cabin();
        $cabin->serial_number = 'J7K2L3M';
        $cabin->material = 'Steel';
        $cabin->seat_number = '2';
        $cabin->save();
        
        $cabin = new Cabin();
        $cabin->serial_number = 'J7K2L3M';
        $cabin->material = 'Fiberglass';
        $cabin->seat_number = '3';
        $cabin->save();
        
        $cabin = new Cabin();
        $cabin->serial_number = 'L6M5N0O';
        $cabin->material = 'Aluminum';
        $cabin->seat_number = '2';
        $cabin->save();
        
        $cabin = new Cabin();
        $cabin->serial_number = 'B4C1D9E';
        $cabin->material = 'Steel';
        $cabin->seat_number = '2';
        $cabin->save();
        
    }
}
