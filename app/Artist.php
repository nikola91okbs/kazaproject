<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Artist extends Model
{
    protected $guarded = [];

    public function getCategoryIdAttribute()
    {
    	return Category::find($this->attributes['category_id'])->name;
    }

    // public function getPriceAttribute()
    // {
    // 	if($this->attributes['price'] != null) return $this->attributes['price'] . ' rub';
    // }

    public function getCreatedAtAttribute()
    {
    	return Carbon::create($this->attributes['created_at'])->diffForHumans(Carbon::now());
    }
}
