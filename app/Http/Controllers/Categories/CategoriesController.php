<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;

class CategoriesController extends Controller
{
   	function index() {
   		$categories = Category::all();
   		return view("categories.index", compact('categories'));
   	}

   	function create () {
   		return view("categories.create");
   	}

   	function store(Request $req) {
   		$req->validate([
   			"category" => "required"
   		]);

   		Category::create($req->all());
   		return redirect()->route("category.index");
   	}

       function show($category) {
        $categories = Category::join('products', 'categories.id', '=', 'products.category_id')
                ->select('categories.category', 'products.*')
                ->where('categories.category', $category)
                ->get();
         return view('categories.show',  compact('categories', 'category'));
    }
}
