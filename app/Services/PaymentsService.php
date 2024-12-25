<?php

namespace App\Services;

use App\Repositories\PaymentsRepository;

class PaymentsService extends BaseService
{
    public function __construct(PaymentsRepository $repository)
    {
        $this->repository = $repository;
    }
}