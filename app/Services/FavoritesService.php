<?php

namespace App\Services;

use App\Repositories\FavoritesRepository;

class FavoritesService extends BaseService
{
    public function __construct(FavoritesRepository $repository)
    {
        $this->repository = $repository;
    }
}