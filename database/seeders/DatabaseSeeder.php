<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Item::factory()->create(['name' => 'Pizza', 'price' => 50]);
        Item::factory()->create(['name' => 'Pasta', 'price' => 40]);
        Item::factory()->create(['name' => 'Chicken', 'price' => 30]);
        Item::factory()->create(['name' => 'Meat', 'price' => 60]);
        Item::factory()->create(['name' => 'Fish', 'price' => 70]);
        Item::factory()->create(['name' => 'Salad', 'price' => 10]);
    }
}
