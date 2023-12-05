<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;

class SearchController extends Controller
{
    function search(Request $req) {
    	$req->validate([ "search" => "required" ]);
    	$param = $req->input("search");
    	$searchs = Product::where("name", "LIKE", "%{$param}%")->get();
    	
    	return view("search.show", compact('searchs'));
    }
}
