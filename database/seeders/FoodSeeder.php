<?php

namespace Database\Seeders;

use App\Models\Category;
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
        $food = new Food();
        $food->name = "Cơm gà";
        $food->address = "Ba Đình, Hà nội";
        $food->category = "Cơm";
        $food->note = "abc";
        $food->price = "30000";
        $food->seen_time = "0";
        $food->save();

        $food = new Food();
        $food->name = "Phở gà";
        $food->address = "Ba Đình, Hà nội";
        $food->category = "Phở";
        $food->note = "abc";
        $food->price = "30000";
        $food->seen_time = "0";
        $food->save();

        $food = new Food();
        $food->name = "Sữa đậu nành";
        $food->address = "Ba Đình, Hà nội";
        $food->category = "Đồ uống";
        $food->note = "abc";
        $food->price = "30000";
        $food->seen_time = "0";
        $food->save();
    }
}
