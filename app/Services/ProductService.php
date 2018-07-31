<?php

namespace Contactamax\Services;

use Contactamax\Entities\Repositories\Contracts\ProductRepositoryContract;
use Contactamax\Services\Contracts\ProductServiceContract;

/**
 * Class ProductService
 * @package Contactamax\Services
 */
class ProductService implements ProductServiceContract
{
    /**
     * @var ProductRepositoryContract
     */
    protected $repository;

    /**
     * ProductService constructor.
     * @param ProductRepositoryContract $repository
     */
    public function __construct(ProductRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->repository->getAll();
    }

    /**
     * @param int $offset
     * @return mixed
     */
    public function getByFilter(int $offset)
    {
        return $this->repository->getByFilter($offset);
    }

    /**
     * @param $attribute
     * @return \Illuminate\Http\JsonResponse
     */
    public function getByAttribute($attribute)
    {
        return response()->json($this->repository
                                     ->getByAttribute('sku', $attribute)
                                     ->where('status', true)
                                     ->with('category')->first());
    }

    /**
     * @param array $data
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function create(array $data)
    {
        try {
            $this->repository->create($data);

            return redirect()->back()->with('success', 'Produto cadastrado com sucesso.');
        } catch (\Exception $exception) {
            return redirect()->back()->with('danger', 'Não foi possível realizar a operação.');
        }
    }

    /**
     * @param int $id
     * @return mixed|string
     */
    public function read(int $id)
    {
        try {
            return $this->repository->read($id);
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    /**
     * @param array $data
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function update(array $data, int $id)
    {
        try {
            $this->repository->update($data, $id);

            return redirect()->back()->with('success', 'Produto alterado com sucesso.');
        } catch (\Exception $exception) {
            return redirect()->back()->with('danger', 'Não foi possível realizar a operação.');
        }
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function delete(int $id)
    {
        try {
            $this->repository->delete($id);

            return redirect()->back()->with('success', 'Produto removido sucesso.');
        } catch (\Exception $exception) {
            return redirect()->back()->with('danger', 'Não foi possível realizar a operação.');
        }
    }
}