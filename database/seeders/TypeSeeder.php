<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Types;
class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $type = new Types();
        $type->serial_number = ('N3M4O5P6L7');
        $type->type_of_vehicle = ('bus');
        $type->vehicle_model = ('Sprinter');
        $type->save();
        
        $type = new Types();
        $type->serial_number = ('J0I5G6H7K9');
        $type->type_of_vehicle = ('truck');
        $type->vehicle_model = ('F-150');
        $type->save();
        
        $type = new Types();
        $type->serial_number = ('H8S3A4Q5L');
        $type->type_of_vehicle = ('special upgrade');
        $type->vehicle_model = ('crane C-123');
        $type->save();
        
        $type = new Types();
        $type->serial_number = ('R9T1Y2U3W');
        $type->type_of_vehicle = ('truck');
        $type->vehicle_model = ('Ram 1500');
        $type->save();
        
        
    }
}
