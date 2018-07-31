<?php

namespace Contactamax\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'sku',
        'name',
        'description',
        'quantity',
        'price',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function setSkuAttribute($value)
    {
        $this->attributes['sku'] = strtoupper($value);
    }

    public function getPriceAttribute($value)
    {
        return number_format($value, 2, ',', '.');
    }

    public function setPriceAttribute($value)
    {
        $this->attributes['price'] = str_replace(',', '.', str_replace('.', '', $value));
    }
}
