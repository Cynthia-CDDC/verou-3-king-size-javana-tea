<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tea = \App\Models\Tea::create([
            'name' => 'Natural rooibos',
            'type' => "rooibos",
            'region' => "South Africa",
            'ingredients' => "<p> Rooibos is a herbal infusion. Unlike real tea, rooibos does not contain caffeine. It does contain antioxidants, including vitamin C, as well as calcium and iron. According to some people, the drink has a slightly relaxing effect. Rooibos would be good before bedtime. The drink is also said to help against various ailments, such as hay fever, asthma, allergies, stomach complaints, acne and eczema. In South Africa, cold rooibos herbal tea is given to babies who suffer from intestinal cramps. <p>",
            'price' => 4.85,
        ]);
    }
}
