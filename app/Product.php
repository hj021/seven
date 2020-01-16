<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];
    protected $casts = [
        'pics' => 'array',
        'available' => 'boolean'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function slide()
    {
        return $this->hasOne(Slide::class);
    }

    public function randomSimilar()
    {
        return $this->category->products()->inRandomOrder()->limit('4')->get();
    }
}
