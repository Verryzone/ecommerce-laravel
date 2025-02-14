<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function list() {
       $products = DB::table('products')->get();
       
       return view('pages.produk.list', ['products' => $products]);
    }

    public function add(Request $request) {
       $add = Products::create([
         'name' => $request->name,
         'description' => $request->description,
         'price' => $request->price,
         'stok' => $request->stok
       ]);

       return redirect()->route('products.list');
    }

    public function delete(Request $request) {
      $produk = Products::find($request->id);
      if($produk) {
         $produk->delete();
      }
      return redirect()->route('products.list');
    }

    
}
