<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Auth::user()->restaurants;
        return view("backend.restaurant.list",compact("restaurants"));
    }
    public function create()
    {
        return view("backend.restaurant.create");
    }

    public function store(Request $request)
    {
        $restaurant = new Restaurant();
        $restaurant->name = $request->name;
        $restaurant->open_time = $request->open_time;
        $restaurant->close_time = $request->close_time;
        $restaurant->ship_time = $request->ship_time;
        $restaurant->user_id = $request->user_id;
        $restaurant->save();
        return redirect()->route("restaurants.index");
    }

    public function edit($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        return view("backend.restaurant.update",compact("restaurant"));
    }

    public function update(Request $request)
    {
        $restaurant = Restaurant::findOrFail($request->id);
        $restaurant->name = $request->name;
        $restaurant->open_time = $request->open_time;
        $restaurant->close_time = $request->close_time;
        $restaurant->ship_time = $request->ship_time;
        $restaurant->save();
        return redirect()->route("restaurants.index");
    }

    public function listForAdmin()
    {
        $restaurants = Restaurant::all();
        return view("backend.restaurant.list",compact("restaurants"));
    }
}
