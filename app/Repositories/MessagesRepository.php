<?php

namespace App\Repositories;

use App\Models\Messages;

class MessagesRepository extends BaseRepository
{
    public function __construct(Messages $model)
    {
        parent::__construct($model);
    }
}