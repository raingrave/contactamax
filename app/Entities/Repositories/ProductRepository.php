<?php

namespace Contactamax\Entities\Repositories;


use Contactamax\Entities\Product;

class ProductRepository
{
    protected $entity;

    public function __construct(Product $product)
    {
        $this->entity = $product;
    }

    public function getAll()
    {
        return $this->entity->all();
    }
}