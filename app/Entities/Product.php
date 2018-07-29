<?php

namespace Contactamax\Entities;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
