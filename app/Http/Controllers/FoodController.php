<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::all();
        return view("frontend.layout.home",compact("foods"));
    }

    public function getByRice()
    {
        $foodRices = Food::where('category_id','LIKE','1')->get();
        return response()->json(["data"=>$foodRices]);
     }

    public function getByNoodle()
    {
        $foodNoodles = Food::where('category_id','LIKE','2')->get();
        return response()->json(["data"=>$foodNoodles]);
    }

    public function getAll()
    {
        $foods = Food::all();
        return response()->json(["data"=>$foods]);
    }

    public function getByDrink()
    {
        $foodDrinks = Food::where('category_id','LIKE','3')->get();
        return response()->json(["data"=>$foodDrinks]);
    }

    public function show($id)
    {
        $food = Food::findOrfail($id);
        $result = $food->restaurants;
       return response()->json(["data"=>$food,"oke"=>$result]);
    }

    public function search(Request $request)
    {
        $result = Food::with("restaurant")->where('name','LIKE','%'.$request->result.'%')->get();
        return response()->json(["data"=>$result]);
    }

}
