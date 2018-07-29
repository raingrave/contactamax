<?php

namespace Contactamax\Entities;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
      'name',
      'description',
      'status'
    ];
}
