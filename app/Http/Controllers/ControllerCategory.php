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
}
