<?php

namespace App\Services;

use App\Repositories\LogsRepository;

class LogsService extends BaseService
{
    public function __construct(LogsRepository $repository)
    {
        $this->repository = $repository;
    }
}