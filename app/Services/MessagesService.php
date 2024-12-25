<?php

namespace App\Services;

use App\Repositories\MessagesRepository;

class MessagesService extends BaseService
{
    public function __construct(MessagesRepository $repository)
    {
        $this->repository = $repository;
    }
}