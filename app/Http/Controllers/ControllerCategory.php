<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class ControllerCategory extends Controller
{
    public function getCategory(){
        return response()->json(category::all(), 200);
    }

    public function getCategoryId($id){
        $category = category::find($id);
        if(!$category){
            return response()->json(['error' => 'Category not fond'], 404);
        }

        return response()->json($category::find($id), 200);
    }

    public function addCategory(Request $request){
        $category = category::create($request->all());
        return response()->json($category, 201);
    }

    public function updateCategory(Request $request, $id){
        $category = category::find($id);
        if(!$category){
            return response()->json(['error' => 'Category not found'], 404);
        }
        $category->update($request->all());
        return response($category, 200);
    }
}
