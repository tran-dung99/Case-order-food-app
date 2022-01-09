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
        $food->address = "Ba Đình, Hà nội";
        $food->restaurant_id = Restaurant::all()->random()->id;
        $food->note = "abc";
        $food->price = "30000";
        $food->category_id = "1";
        $food->seen_time = "0";
        $food->save();

        $food = new Food();
        $food->name = "Phở gà";
        $food->address = "Ba Đình, Hà nội";
        $food->restaurant_id = Restaurant::all()->random()->id;
        $food->note = "abc";
        $food->price = "30000";
        $food->category_id = "2";
        $food->seen_time = "0";
        $food->save();

        $food = new Food();
        $food->name = "Phở Bò Tái";
        $food->address = "Cầu Giấy, Hà nội";
        $food->restaurant_id = Restaurant::all()->random()->id;
        $food->note = "abc";
        $food->price = "30000";
        $food->category_id = "2";
        $food->seen_time = "0";
        $food->save();

        $food = new Food();
        $food->name = "Sữa đậu nành";
        $food->address = "Ba Đình, Hà nội";
        $food->restaurant_id = Restaurant::all()->random()->id;
        $food->note = "abc";
        $food->price = "30000";
        $food->category_id = "3";
        $food->seen_time = "0";
        $food->save();

        $food = new Food();
        $food->name = "Cơm Sườn";
        $food->address = "Nam Từ Liên, Hà nội";
        $food->restaurant_id = Restaurant::all()->random()->id;
        $food->note = "abc";
        $food->price = "30000";
        $food->category_id = "1";
        $food->seen_time = "0";
        $food->save();
    }
}
