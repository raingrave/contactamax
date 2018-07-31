<?php

namespace Contactamax\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InputOrder extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'code',
        'total',
        'request_type',
        'status'
    ];

    public function items()
    {
        return $this->hasMany(Item::class, 'input_order_id');
    }
}
