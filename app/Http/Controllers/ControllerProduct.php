<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ControllerProduct extends Controller
{
    public function getProducts(){
        $product = product::all();
        return response()->json($product, 200);
    }

    public function getProductId($id){
        $product = product::find($id);
        
        if(!$product){
            return response()->json(['error' => 'Product not found'], 404);
        }

        return response()->json($product, 200);
    }

    public function addProduct(Request $request){
        $product = product::create($request->all());
        return response()->json($product, 201);
    }

    public function updateProduct(Request $request, $id){
        $product = product::find($id);

        if(!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        return response()->json($product, 200);
    }

    public function deleteProduct($id){
        $product = product::find($id);

        if(!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        $product->delete();
        return response()->json(null, 204);
    }
}
