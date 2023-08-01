<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Upgrade;

class UpgradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $upgrade = new Upgrade();
        $upgrade->serial_number = ('P5L9M2N8O');
        $upgrade->upgrade_type = ('crane');
        $upgrade->save();
        
        $upgrade = new Upgrade();
        $upgrade->serial_number = ('P5L9M2N8O');
        $upgrade->upgrade_type = ('tow truck upgrade');
        $upgrade->save();
        
        $upgrade = new Upgrade();
        $upgrade->serial_number = ('P5L9M2N8O');
        $upgrade->upgrade_type = ('fire truck upgrade');
        $upgrade->save();
        
        

    }
}
