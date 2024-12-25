<?php

namespace App\Repositories;

use App\Models\Logs;

class LogsRepository extends BaseRepository
{
    public function __construct(Logs $model)
    {
        parent::__construct($model);
    }
}