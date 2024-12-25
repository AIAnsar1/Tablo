<?php

namespace App\Services;

use App\Repositories\FilterValuesRepository;

class FilterValuesService extends BaseService
{
    public function __construct(FilterValuesRepository $repository)
    {
        $this->repository = $repository;
    }
}