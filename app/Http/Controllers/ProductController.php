<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function demo(){
        $product = new Product();
        $product->name = "Product01";
        $product->price = 10000;
        $product->save();
    }

    public function demo2(){
       return Product::all();
    }
}
