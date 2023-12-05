<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;

class SearchController extends Controller
{
    function search(Request $req) {
    	$param = $req->validate([ "search" => "required" ]);

    	$search = Product::where("name", "LIKE", "%{$param}%")->get();
    	return view("search.show", compact('search'));
    }
}
