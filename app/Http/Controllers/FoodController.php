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
        $foodRices = Food::where('category','LIKE','Cơm')->get();
        return response()->json(["data"=>$foodRices]);
     }

    public function getByNoodle()
    {
        $foodNoodles = Food::where('category','LIKE','Phở')->get();
        return response()->json(["data"=>$foodNoodles]);
    }

    public function getAll()
    {
        $foods = Food::all();
        return response()->json(["data"=>$foods]);
    }

    public function getByDrink()
    {
        $foodDrinks = Food::where('category','LIKE','Đồ uống')->get();
        return response()->json(["data"=>$foodDrinks]);
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

    public function addToFavorite($id)
    {
        $food = Food::findOrFail($id);
        $foodmark = session()->get('foodmark', []);
        if (!isset($foodmark[$id])) {
            $foodmark[$id] = array(
                'id' => $food->id,
                'name' => $food->name,
                'image' => $food->image,
                'price' => $food->price,
                'quantity' => 1
            );
        } else {
            $foodmark[$id]['quantity']++;
        }
        session()->put('foodmark', $foodmark);
        return redirect()->back();
    }


    public function showFavoriteList()
    {
        $foods = session()->get('foodmark') ?? [];
        return view('food.favorite',compact('foods'));
    }

    public function deleteFavorite($id)
    {
        $foods = session()->get('foodmark');
        if ($foods[$id]['quantity'] > 1){
            $foods[$id]['quantity']--;
        }else{
            unset($foods[$id]);
        }
        session()->put('foodmark',$foods);
        return redirect()->back();
    }

    public function deleteFavorite2($id)
    {
        $foods = session()->get('foodmark');
        unset($foods[$id]);
        session()->put('foodmark',$foods);
        return redirect()->back();
    }

}
