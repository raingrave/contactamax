<?php

namespace Contactamax\Entities\Repositories\Contracts;

use Contactamax\Entities\InputOrder;

interface InputOrderRepositoryContract
{
    public function __construct(InputOrder $inputOrder);
}