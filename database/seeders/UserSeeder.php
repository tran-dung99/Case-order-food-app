<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@gmail.com";
        $user->password = Hash::make('123123');
        $user->phone = '0977546351';
        $user->save();

        $user = new User();
        $user->name = "Hoa";
        $user->email = "hoa@gmail.com";
        $user->password = Hash::make('123123');
        $user->phone = '0954821657';
        $user->save();

        $user = new User();
        $user->name = "Nga";
        $user->email = "nga@gmail.com";
        $user->password = Hash::make('123123');
        $user->phone = '0962458124';
        $user->save();

        $user = new User();
        $user->name = "Hoàng";
        $user->email = "hoang@gmail.com";
        $user->password = Hash::make('123123');
        $user->phone = '0856248751';
        $user->save();
    }
}
