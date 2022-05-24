<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacteristicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $characteristic = \App\Models\Characteristic::create([
            'name' => 'sweet',
        ]);

        $characteristic = \App\Models\Characteristic::create([
            'name' => 'healthy',
        ]);

        $characteristic = \App\Models\Characteristic::create([
            'name' => 'fruity',
        ]);

        $characteristic = \App\Models\Characteristic::create([
            'name' => 'blend',
        ]);

        $characteristic = \App\Models\Characteristic::create([
            'name' => 'citrus',
        ]);

        $characteristic = \App\Models\Characteristic::create([
            'name' => 'mint',
        ]);

        $characteristic = \App\Models\Characteristic::create([
            'name' => 'spiced',
        ]);

        $characteristic = \App\Models\Characteristic::create([
            'name' => 'flowery',
        ]);

        $characteristic = \App\Models\Characteristic::create([
            'name' => 'origin',
        ]);
    }
}
