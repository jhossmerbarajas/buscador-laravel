<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\StoreProduct;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;

class ProductController extends Controller
{
    function index() {
    	$products = Product::all();
    	return view('products.index', compact('products'));
    }

    function store (StoreProduct $request) {
    	$file = $request->file('file')->store("public");
		
    	$product = new Product;
    	$product->name = $request->input("name");
    	$product->description = $request->input("description");
    	$product->url_img = $file;
    	$product->save();

    	return redirect()->route("product.index");
    }
}
