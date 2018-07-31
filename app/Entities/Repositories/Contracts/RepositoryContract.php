<?php

namespace Contactamax\Entities\Repositories\Contracts;

/**
 * Interface RepositoryContract
 * @package Contactamax\Entities\Repositories\Contracts
 */
interface RepositoryContract
{
    /**
     * @return mixed
     */
    public function getAll();

    /**
     * @param int $offset
     * @return mixed
     */
    public function getPaginate(int $offset);

    /**
     * @param $attribute
     * @param $operator
     * @param $value
     * @return mixed
     */
    public function getByAttribute($attribute, $value, $operator);

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