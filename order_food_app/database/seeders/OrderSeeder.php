<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order = new Order();
        $order->discount_code = "001";
        $order->discount_money = "10000";
        $order->order_time = "0";
        $order->use_time = "0";
        $order->save();

        $order = new Order();
        $order->discount_code = "002";
        $order->discount_money = "20000";
        $order->order_time = "0";
        $order->use_time = "0";
        $order->save();

        $order = new Order();
        $order->discount_code= "003";
        $order->discount_money = "30000";
        $order->order_time = "0";
        $order->use_time = "0";
        $order->save();
    }
}
