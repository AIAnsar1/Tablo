<?php

namespace App\Services;

use App\Repositories\FiltersRepository;

class FiltersService extends BaseService
{
    public function __construct(FiltersRepository $repository)
    {
        $this->repository = $repository;
    }
}