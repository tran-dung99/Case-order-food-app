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
        return view("food.food",compact("foods"));
    }

    public function getByCom()
    {
        $foods = Food::where('category','LIKE','Cơm')->get();
        return view("food.com",compact("foods"));
     }

    public function getByPho()
    {
        $foods = Food::where('category','LIKE','Phở')->get();
        return view("food.pho",compact("foods"));
    }

    public function getByDouong()
    {
        $foods = Food::where('category','LIKE','Đồ uống')->get();
        return view("food.douong",compact("foods"));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $food = Food::findOrfail($id);
       return view("food.detail",compact("food"));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit(Food $food)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Food $food)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        //
    }

    public function search(Request $request)
    {
        $result = Food::with("restaurant")->where('name','LIKE','%'.$request->result.'%')->get();
        return response()->json(["data"=>$result]);
    }
}
