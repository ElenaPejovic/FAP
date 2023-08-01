<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Frame;

class FrameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $frame = new Frame();
        $frame->serial_number = 'A1B2C3D';
        $frame->material = 'Steel';
        $frame->dimensions = '9.9 ft x 4.5 ft x 2.7 ft';
        $frame->save();

        $frame = new Frame();
        $frame->serial_number = 'B4C1D9E';
        $frame->material = 'Carbon Fiber';
        $frame->dimensions = '11.5 ft x 5.9 ft x 3.4 ft';
        $frame->save();
        
        $frame = new Frame();
        $frame->serial_number = 'B4C1D9E';
        $frame->material = 'Aluminum';
        $frame->dimensions = '10.3 ft x 4.8 ft x 2.9 ft';
        $frame->save();
        
        $frame = new Frame();
        $frame->serial_number = 'N3P5Q6R';
        $frame->material = 'Steel';
        $frame->dimensions = '11.1 ft x 5.3 ft x 3.1 ft';
        $frame->save();
        
        $frame = new Frame();
        $frame->serial_number = 'V4W9X2Y';
        $frame->material = 'Carbon Fiber';
        $frame->dimensions = '10.8 ft x 5.7 ft x 3.3 ft';
        $frame->save();
        
        $frame = new Frame();
        $frame->serial_number = 'R1S8T3U';
        $frame->material = 'Aluminum';
        $frame->dimensions = '9.5 ft x 4.7 ft x 2.6 ft';
        $frame->save();
        
        $frame = new Frame();
        $frame->serial_number = 'E5F0G6H';
        $frame->material = 'Aluminum';
        $frame->dimensions = '10.0 ft x 5.0 ft x 3.0 ft';
        $frame->save();
        
        $frame = new Frame();
        $frame->serial_number = 'J7K2L3M';
        $frame->material = 'Carbon Fiber';
        $frame->dimensions = '11.2 ft x 6.0 ft x 3.5 ft';
        $frame->save();
        
        $frame = new Frame();
        $frame->serial_number = 'L6M5N0O';
        $frame->material = 'Carbon Fiber';
        $frame->dimensions = '9.8 ft x 4.9 ft x 2.8 ft';
        $frame->save();
        
        $frame = new Frame();
        $frame->serial_number = 'B4C1D9E';
        $frame->material = 'Aluminum';
        $frame->dimensions = '10.5 ft x 5.5 ft x 3.2 ft';
        $frame->save();
        
    }
}
