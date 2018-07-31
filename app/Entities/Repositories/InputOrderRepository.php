<?php

namespace Contactamax\Entities\Repositories;

use Contactamax\Entities\InputOrder;
use Contactamax\Entities\Repositories\Contracts\InputOrderRepositoryContract;

class InputOrderRepository extends Repository implements InputOrderRepositoryContract
{
    protected $entity;

    public function __construct(InputOrder $entity)
    {
        $this->entity = $entity;
    }

    public function getByFilter(int $offset)
    {
        return $this->entity->when(request()->status, function ($query) {
            $query->where('status', request()->status == 'active' ? true : false);
        })->when(request()->code, function ($query) {
            $query->where('code', request()->code);
        })->orderBy('created_at', 'desc')->withTrashed()
          ->paginate($offset);
    }
}