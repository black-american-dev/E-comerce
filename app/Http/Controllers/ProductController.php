<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index() {
        return view('products.index', [
            'products' => Product::all()
        ]);
    }

    public function show(Product $product) {
        /*
        or you can put parametre in the function for example $id

        and then put this : 
        $product = Product::findOrFail($id);
        and return the $product
        */
      
        return view('products.show', [
            'product' => $product
        ]);
    }

    public function create() {
        return view('products.create');
    }

    public function search(Request $request) {
        $term = $request->search;

        $products = Product::search($term)->get();
        
         return view('products.index', [
        'products' => $products,
        'search' => $term
    ]);
    }
}
