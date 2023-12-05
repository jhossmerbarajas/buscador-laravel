<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Categories\CategoriesController;
use App\Http\Controllers\Search\SearchController;

// Route::get('/', [ProductController::class, 'index']);
Route::resource("products", ProductController::class)->names("product");

Route::get("/categories", [CategoriesController::class, "index"])->name("category.index");
Route::get("/categories/create", [CategoriesController::class, "create"])->name("category.create");
Route::post("/categories", [CategoriesController::class, "store"])->name("category.store");
Route::get("/categories/{category}", [CategoriesController::class, "show"])
									->where("category", ".*")
									->name("category.show");


Route::get('/search', [SearchController::class, 'search'])->name("search");