<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Food;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Auth::user()->foods;
        return view('backend.food.list',compact("foods"));
    }

    public function destroy($id)
    {
        $food = Food::findOrFail($id);
        $food->delete();
        return response()->json(["status"=>"success"]);
    }

    public function show($id)
    {
        $food = Food::findOrFail($id);
        return view('backend.food.detail',compact("food"));
    }

    public function create()
    {
        $restaurants = Restaurant::all();
        return view("backend.food.create",compact("restaurants"));
    }

    public function store(Request $request)
    {
        $food = new Food();
        $food->name = $request->name;
        $food->restaurant_id = $request->restaurant;
        $food->category_id = $request->category;
        $food->user_id = $request->user_id;
        $food->note = $request->note;
        $food->price = $request->price;
        $food->seen_time = 0;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $path = $image->store('images','public');
            $food->image = $path;
        }
        $food->save();
        return redirect()->route("foods.index");
    }

    public function edit($id)
    {
        $food = Food::findOrFail($id);
        return view("backend.food.update",compact("food"));
    }

    public function update(Request $request)
    {
        $food = Food::findOrFail($request->id);
        $food->name = $request->name;
        $food->restaurant_id = $request->restaurant;
        $food->category_id = $request->category;
        $food->note = $request->note;
        $food->price = $request->price;
        $food->seen_time = 0;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $path = $image->store('images','public');
            $food->image = $path;
        }
        $food->save();
        return redirect()->route("foods.index");
    }

    public function listFoodForAdmin()
    {
        $foods = Food::all();
        return view("backend.food.list",compact("foods"));
    }
}
