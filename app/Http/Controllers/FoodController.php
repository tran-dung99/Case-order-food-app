<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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



    public function addToFavorite($id)
    {   if(Auth::check()){
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
        return redirect()->back();}
        else{
            return redirect()->route("home.showFormLogin");
        }
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
