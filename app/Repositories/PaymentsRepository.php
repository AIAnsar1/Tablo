<?php

namespace App\Repositories;

use App\Models\Payments;

class PaymentsRepository extends BaseRepository
{
    public function __construct(Payments $model)
    {
        parent::__construct($model);
    }
}