<?php

namespace Contactamax\Services\Contracts;

use Contactamax\Entities\Repositories\Contracts\ProductRepositoryContract;

/**
 * Interface ProductServiceContract
 * @package Contactamax\Services\Contracts
 */
interface ProductServiceContract
{
    /**
     * ProductServiceContract constructor.
     * @param ProductRepositoryContract $productRepository
     */
    public function __construct(ProductRepositoryContract $productRepository);

    /**
     * @return mixed
     */
    public function getAll();

    /**
     * @return mixed
     */
    public function getByFilter(int $offset);

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data);

    /**
     * @param int $id
     * @return mixed
     */
    public function read(int $id);

    /**
     * @param array $data
     * @param int $id
     * @return mixed
     */
    public function update(array $data, int $id);

    /**
     * @param int $id
     * @return mixed
     */
    public function delete(int $id);
}