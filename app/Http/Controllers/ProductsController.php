<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function list() {
       $products = DB::table('products')->get();
       
    //    dump($products);

       return view('pages.produk.list', ['products' => $products]);
    }
}
