<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ProductController extends Controller
{
    //
    public function index() {
        return view('products.index', [
            'products' => Product::latest()->get()
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

    public function store(Request $request) {
        $formFields = $request->validate([
            "name"=>'required',
            "slug"=>'required',
            "description"=>'required',
            "price"=>'required',
            "stock"=>'required',
            "image"=>'required',
        ]);
        Product::create($formFields);
        return redirect("/")->with("message", "product added succsessfuly");
    }
}