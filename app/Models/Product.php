<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ["name", "description", "url_img"]; 
    public $timestamps = false;

    function category () {
    	return $this->belongsTo("App\Models\Category");
    }
}
