<?php

namespace Contactamax\Entities\Repositories;

use Contactamax\Entities\Item;
use Contactamax\Entities\Repositories\Contracts\ItemRepositoryContract;

/**
 * Class ItemRepository
 * @package Contactamax\Entities\Repositories
 */
class ItemRepository extends Repository implements ItemRepositoryContract
{
    /**
     * @var Item
     */
    protected $entity;

    /**
     * ItemRepository constructor.
     * @param Item $item
     */
    public function __construct(Item $item)
    {
        $this->entity = $item;
    }
}