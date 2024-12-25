<?php

namespace App\Repositories;

use App\Models\Filters;

class FiltersRepository extends BaseRepository
{
    public function __construct(Filters $model)
    {
        parent::__construct($model);
    }
}