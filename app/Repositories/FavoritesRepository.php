<?php

namespace App\Repositories;

use App\Models\Favorites;

class FavoritesRepository extends BaseRepository
{
    public function __construct(Favorites $model)
    {
        parent::__construct($model);
    }
}