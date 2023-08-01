<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trunk;

class TrunkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $trunk = new Trunk();
        $trunk->serial_number = 'T1R2U3N4K';
        $trunk->material = 'Fiberglass';
        $trunk->dimensions = '8.5 ft x 4.5 ft x 3.2 ft';
        $trunk->save();
        
        $trunk = new Trunk();
        $trunk->serial_number = 'M5O6P7Q8W';
        $trunk->material = 'Aluminum';
        $trunk->dimensions = '7.8 ft x 4.0 ft x 2.8 ft';
        $trunk->save();

        $trunk = new Trunk();
        $trunk->serial_number = 'Y9Z1A2B3C4';
        $trunk->material = 'Steel';
        $trunk->dimensions = '9.2 ft x 5.0 ft x 3.5 ft';
        $trunk->save();

        $trunk = new Trunk();
        $trunk->serial_number = 'P5L9M2N8O';
        $trunk->material = 'Aluminum';
        $trunk->dimensions = '8.0 ft x 4.2 ft x 3.0 ft';
        $trunk->save();

        $trunk = new Trunk();
        $trunk->serial_number = 'D7F6G1H0E';
        $trunk->material = 'Fiberglass';
        $trunk->dimensions = '7.5 ft x 3.9 ft x 2.6 ft';
        $trunk->save();

        $trunk = new Trunk();
        $trunk->serial_number = 'X3V4B5N6K';
        $trunk->material = 'Aluminum';
        $trunk->dimensions = '8.8 ft x 4.7 ft x 3.3 ft';
        $trunk->save();

        $trunk = new Trunk();
        $trunk->serial_number = 'R9T1Y2U3W';
        $trunk->material = 'Steel';
        $trunk->dimensions = '9.1 ft x 4.3 ft x 3.1 ft';
        $trunk->save();

        $trunk = new Trunk();
        $trunk->serial_number = 'H8S3A4Q5L';
        $trunk->material = 'Steel';
        $trunk->dimensions = '8.3 ft x 3.8 ft x 2.9 ft';
        $trunk->save();

        $trunk = new Trunk();
        $trunk->serial_number = 'J0I5G6H7K9';
        $trunk->material = 'Aluminum';
        $trunk->dimensions = '9.5 ft x 4.9 ft x 3.4 ft';
        $trunk->save();

        $trunk = new Trunk();
        $trunk->serial_number = 'N3M4O5P6L7';
        $trunk->material = 'Fiberglass';
        $trunk->dimensions = '7.9 ft x 3.5 ft x 2.7 ft';
        $trunk->save();

    }
}
