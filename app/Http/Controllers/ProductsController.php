<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function list() {
       $products = DB::table('products')->get();
       
       return view('management.pages.produk.list', ['products' => $products]);
    }

    public function add(Request $request) {
      $validated = $request->validate([
         'name' => 'required|string|max:255',
         'description' => 'required|string',
         'price' => 'required|numeric',
         'stok' => 'required|numeric'
      ]);

       $add = Products::create($validated);

       return redirect()->route('management.products.list');
    }

    public function delete(Request $request) {
      $produk = Products::find($request->id);
      if($produk) {
         $produk->delete();
      }
      return redirect()->route('management.products.list');
    }

    
}
