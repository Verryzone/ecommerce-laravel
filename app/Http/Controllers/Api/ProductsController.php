<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function show(string $id) {
        $product = Products::find($id);
        if(!$product) {
            return response()->json([
                'message' => 'Product not found',
                'id' => $id
            ]);
        }

        return response()->json($product);
    }

    public function update(string $id) {
        $product = Products::find($id);
        if(!$product) {
            return response()->json([
                'message' => 'Product not found',
            ]);
        }
    }
}
