<?php

namespace App\Services;

use App\Repositories\BansRepository;

class BansService extends BaseService
{
    public function __construct(BansRepository $repository)
    {
        $this->repository = $repository;
    }
}