<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $collection = \App\Models\Collection::create([
            'type' => 'Favourites',
        ]);

        $collection = \App\Models\Collection::create([
            'type' => 'Like',
        ]);

        $collection = \App\Models\Collection::create([
            'type' => 'Dislike',
        ]);

        $collection = \App\Models\Collection::create([
            'type' => 'Want to try',
        ]);
    }
}
