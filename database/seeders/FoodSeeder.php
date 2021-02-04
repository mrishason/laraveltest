<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['name' => 'WALI', 'description' => 'Menu'],
            ['name' => 'UGALI', 'description' => 'Menu'],
            ['name' => 'NYAMA', 'description' => 'Menu'],
            ['name' => 'PILAU', 'description' => 'Menu'],
            ['name' => 'NDIZI', 'description' => 'Menu'],
            
        ];

        foreach ($items as $item) {
            \App\Models\Food::updateOrCreate($item);
        }
    }
}
