<?php

namespace App\Services;

use App\Repositories\ImageRepository;

class ImageService extends BaseService
{
    public function __construct(ImageRepository $repository)
    {
        $this->repository = $repository;
    }
}