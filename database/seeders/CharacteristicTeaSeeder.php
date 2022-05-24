<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacteristicTeaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $characteristicTea = \App\Models\CharacteristicTea::create([
            'characteristic_id' => '2',
            'tea_id' => '1'
        ]);

        
        $characteristicTea = \App\Models\CharacteristicTea::create([
            'characteristic_id' => '1',
            'tea_id' => '1'
        ]);

        
        $characteristicTea = \App\Models\CharacteristicTea::create([
            'characteristic_id' => '9',
            'tea_id' => '1'
        ]);
    }
}
