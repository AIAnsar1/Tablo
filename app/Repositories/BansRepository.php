<?php

namespace App\Repositories;

use App\Models\Bans;

class BansRepository extends BaseRepository
{
    public function __construct(Bans $model)
    {
        parent::__construct($model);
    }
}