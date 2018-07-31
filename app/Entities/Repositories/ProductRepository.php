<?php

namespace Contactamax\Entities\Repositories;

use Contactamax\Entities\Product;
use Contactamax\Entities\Repositories\Contracts\ProductRepositoryContract;

/**
 * Class ProductRepository
 * @package Contactamax\Entities\Repositories
 */
class ProductRepository extends Repository implements ProductRepositoryContract
{
    /**
     * @var Product
     */
    protected $entity;

    /**
     * ProductRepository constructor.
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->entity = $product;
    }

    /**
     * @param int $offset
     * @return mixed
     */
    public function getByFilter(int $offset)
    {
        return $this->entity->when(request()->status, function ($query) {
            $query->where('status', request()->status == 'active' ? true : false);
        })->when(request()->sku, function ($query) {
            $query->where('sku', request()->sku);
        })->where('name', 'LIKE',  request()->name . '%')
          ->orderBy('name')
          ->paginate($offset);
    }
}