<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','value_sale','value_cost','obs','category_id'];

    public function category() {
        return $this->hasOne(Category::class,'id','category_id');
    }
}
