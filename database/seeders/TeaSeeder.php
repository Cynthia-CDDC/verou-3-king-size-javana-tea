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
            'ingredients' => "Rooibos is a herbal infusion. Unlike real tea, rooibos does not contain caffeine. It does contain antioxidants, including vitamin C, as well as calcium and iron. According to some people, the drink has a slightly relaxing effect. Rooibos would be good before bedtime. The drink is also said to help against various ailments, such as hay fever, asthma, allergies, stomach complaints, acne and eczema. In South Africa, cold rooibos herbal tea is given to babies who suffer from intestinal cramps.",
            'price' => 4.80,
            'image' => 'rooibos-natuur4-1636988943.jpg'
        ]);

        $tea = \App\Models\Tea::create([
            'name' => 'Strawberry Kiwi',
            'type' => "fruit infusion",
            'region' => "",
            'ingredients' => "Fruit blend with rosehip, hibiscus, strawberry & kiwi",
            'price' => 5.60,
            'image' => 'aardbei-kiwi-1615642937.jpg'
        ]);

        $tea = \App\Models\Tea::create([
            'name' => 'Amaretto tea',
            'type' => "black tea",
            'region' => "",
            'ingredients' => "lack tea with almond pieces and amaretto aroma.",
            'price' => 5.50,
            'image' => 'javana2020-by-as-deldycke-193-1615739290.jpg'
        ]);

        $tea = \App\Models\Tea::create([
            'name' => 'Flower garden',
            'type' => "green tea",
            'region' => "China",
            'ingredients' => "Green Sencha tea with pieces of papaya, pineapple, strawberry and raspberry blended with malven flowers, rose petals",
            'price' => 5.80,
            'image' => 'flower-garden-z-blik-1636121244.jpg'
        ]);

        $tea = \App\Models\Tea::create([
            'name' => 'Ginger Love',
            'type' => "herbal infusion",
            'region' => "",
            'ingredients' => "Herbal blend with ginger, cinnamon, blueberry leaf, apple, sugar, bamboo leaf, orange blossom, rosebuds. Anti-inflammatory and digestive.",
            'price' => 6.30,
            'image' => 'ginger-love-1615739723.jpg'
        ]);

        $tea = \App\Models\Tea::create([
            'name' => 'Formosa oolong',
            'type' => "black tea oolong tea",
            'region' => "Taïwan",
            'ingredients' => "Formosa is the former name of Taiwan. Oolong tea is semi-oxidized tea which is therefore neither black nor green. Due to its low caffeine content, the tea does not become bitter and can be drunk throughout the day. A beautiful leaf tea with a fruity, refined taste.",
            'price' => 5.30,
            'image' => 'formosa-oolong-1625564222.jpg'
        ]);

        $tea = \App\Models\Tea::create([
            'name' => 'Snow white',
            'type' => "white tea",
            'region' => "China",
            'ingredients' => "Blend of Pai mu tan white tea, sencha, red currant, strawberry, peony & rosebuds",
            'price' => 6.20,
            'image' => 'javana2020-by-as-deldycke-193-1615739290.jpg'
        ]);
    }
}
