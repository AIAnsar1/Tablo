<?php

namespace App\Repositories;

use App\Models\FilterValues;

class FilterValuesRepository extends BaseRepository
{
    public function __construct(FilterValues $model)
    {
        parent::__construct($model);
    }
}