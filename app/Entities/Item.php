<?php

namespace Contactamax\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'product_id',
      'input_order_id',
      'quantity'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
