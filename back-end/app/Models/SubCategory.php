<?php

namespace App\Models;

use App\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function products(){
        return $this->belongsTo(Product::class);
    }
    public function categories(){
        return $this->belongsTo(Category::class, 'category_id','id');
    }


}
