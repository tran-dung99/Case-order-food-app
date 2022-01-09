<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view("backend.category.list",compact("categories"));
    }
    public function create()
    {
        return view("backend.category.create");
    }

    public function store(Request $request)
    {

        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect()->route("categories.index");
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view("backend.category.update",compact("category"));
    }

    public function update(Request $request)
    {
        $category = Category::findOrFail($request->id);
        $category->name = $request->name;
        return redirect()->route("categories.index");
    }
}
