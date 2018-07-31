<?php

namespace Contactamax\Entities\Repositories\Contracts;

use Contactamax\Entities\Product;

/**
 * Interface ProductRepositoryContract
 * @package Contactamax\Entities\Repositories\Contracts
 */
interface ProductRepositoryContract
{
    /**
     * ProductRepositoryContract constructor.
     * @param Product $product
     */
    public function __construct(Product $product);

    /**
     * @param int $offset
     * @return mixed
     */
    public function getByFilter(int $offset);
}