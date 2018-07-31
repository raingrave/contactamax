<?php

namespace Contactamax\Entities\Repositories\Contracts;

use Contactamax\Entities\Item;

interface ItemRepositoryContract
{
    public function __construct(Item $item);
}