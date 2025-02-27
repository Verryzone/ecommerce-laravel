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
         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         'name' => 'required|string|max:255',
         'description' => 'required|string',
         'price' => 'required|numeric',
         'stok' => 'required|numeric'
      ]);

      $storeImage = $request->file('image')->store('products/images', 'public');
      $imageName = basename($storeImage);

      $data = [
         'name' => $request->name,
         'description' => $request->description,
         'price' => $request->price,
         'stok' => $request->stok,
         'image' => $imageName
      ];

       $add = Products::create($data);

       return redirect()->route('management.products.list');
    }

    public function delete(Request $request) {
      $produk = Products::find($request->id);
      if($produk) {
         $produk->delete();
      }
      return redirect()->route('management.products.list');
    }

    function loadDashboard() {
      $products = DB::table('products')->get();

       return view('public.pages.dashboard.app', ['products' => $products]);
    }

    
}
