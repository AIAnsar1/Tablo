<?php

namespace App\Services;

use App\Repositories\ReviewsRepository;

class ReviewsService extends BaseService
{
    public function __construct(ReviewsRepository $repository)
    {
        $this->repository = $repository;
    }
}