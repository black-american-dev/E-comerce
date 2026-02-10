<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    public function scopeSearch ($query ,$term ) {
        return $query->where("name", "like", "%{$term}%")
        ->orWhere("slug", "like", "%{$term}%");
    }
}
