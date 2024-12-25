<?php

namespace App\Repositories;

use App\Models\Reviews;

class ReviewsRepository extends BaseRepository
{
    public function __construct(Reviews $model)
    {
        parent::__construct($model);
    }
}