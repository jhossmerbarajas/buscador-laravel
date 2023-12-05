<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\StoreProduct;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    function index() {
    	
        $products = Product::join("categories", "products.category_id", "=", "categories.id")
                            ->select("products.*", "categories.category")
                            ->get();

    	return view('products.index', compact('products'));
    }

    function create() {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    function store (StoreProduct $request) {
    	$file = $request->file('file')->store("public");
		
    	$product = new Product;
    	$product->name = $request->input("name");
    	$product->description = $request->input("description");
    	$product->url_img = $file;
        $product->category_id = $request->input("category");
    	$product->save();

    	return redirect()->route("product.index");
    }

   function show (Product $product) {
        return view("products.show", compact("product"));
   }
}
