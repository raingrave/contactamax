<?php

namespace Contactamax\Entities\Repositories;

use Contactamax\Entities\Repositories\Contracts\RepositoryContract;

/**
 * Class Repository
 * @package Contactamax\Entities\Repositories
 */
abstract class Repository implements RepositoryContract
{
    /**
     * @var
     */
    protected $entity;

    /**
     * Repository constructor.
     * @param $entity
     */
    public function __construct($entity)
    {
        $this->entity = $entity;
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->entity->all();
    }

    /**
     * @param int $offset
     * @return mixed
     */
    public function getPaginate(int $offset = 20)
    {
        return $this->entity->paginate($offset);
    }

    /**
     * @param $attribute
     * @param $value
     * @param string $operator
     * @return mixed
     */
    public function getByAttribute($attribute, $value, $operator = '=')
    {
        return $this->entity->where($attribute, $operator, $value);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function read(int $id)
    {
        return $this->entity->findOrFail($id);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->entity->create($data);
    }

    /**
     * @param array $data
     * @param int $id
     * @return mixed
     */
    public function update(array $data, int $id)
    {
        return $this->entity
                    ->findOrFail($id)
                    ->update($data);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function delete(int $id)
    {
        return $this->entity
                    ->findOrFail($id)
                    ->delete();
    }
}