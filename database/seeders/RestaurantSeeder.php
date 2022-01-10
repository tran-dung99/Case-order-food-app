<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurant = new Restaurant();
        $restaurant->name = "Hồng Công";
        $restaurant->open_time = "8:00 AM";
        $restaurant->close_time = "18:00 PM";
        $restaurant->ship_time = "15";
        $restaurant->user_id = 1;
        $restaurant->save();

        $restaurant = new Restaurant();
        $restaurant->name = "Phố Cổ";
        $restaurant->open_time = "8:00 AM";
        $restaurant->close_time = "18:00 PM";
        $restaurant->ship_time = "10";
        $restaurant->user_id = 2;
        $restaurant->save();

        $restaurant = new Restaurant();
        $restaurant->name = "Hà Nội Phố";
        $restaurant->open_time = "8:00 AM";
        $restaurant->close_time = "18:00 PM";
        $restaurant->ship_time = "20";
        $restaurant->user_id = 3;
        $restaurant->save();
    }
}
