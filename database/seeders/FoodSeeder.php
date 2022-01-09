<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Food;
use App\Models\Restaurant;
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
        $food = new Food();
        $food->name = "Cơm gà";
        $food->note = "abc";
        $food->price = "30000";
        $food->seen_time = 0;
        $food->restaurant_id = 1;
        $food->category_id = 1;
        $food->save();

        $food = new Food();
        $food->name = "Phở gà";
        $food->note = "abc";
        $food->price = "30000";
        $food->seen_time = 0;
        $food->restaurant_id = 2;
        $food->category_id = 2;
        $food->save();

        $food = new Food();
        $food->name = "Phở Bò Tái";
        $food->note = "abc";
        $food->price = "30000";
        $food->seen_time = 0;
        $food->restaurant_id = 3;
        $food->category_id = 2;
        $food->save();

        $food = new Food();
        $food->name = "Sữa đậu nành";
        $food->note = "abc";
        $food->price = "30000";
        $food->seen_time = 0;
        $food->restaurant_id = 3;
        $food->category_id = 2;
        $food->save();

    }
}
