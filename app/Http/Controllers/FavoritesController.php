<?php

namespace App\Http\Controllers;

use App\Http\Resources\FavoritesResource;
use Illuminate\Http\Request;
use Throwable;
use App\Models\Favorites;
use App\Services\FavoritesService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Requests\StoreRequest\StoreFavoritesRequest;
use App\Http\Requests\UpdateRequest\UpdateFavoritesRequest;


class FavoritesController extends Controller
{
    /**
     * @var FavoritesService
     */
    private FavoritesService $service;

    /**
     * @param FavoritesService $service
     */
    public function __construct(FavoritesService $service)
    {
        $this->service = $service;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     * @throws Throwable
     */
    public function index(Request $request)
    {
        return FavoritesResource::collection( $this->service->paginatedList( $request->all() ) );
    }

    /**
     * @param StoreFavoritesRequest $request
     * @return array|Builder|Collection|Favorites
     * @throws Throwable
     */
    public function store(StoreFavoritesRequest $request): array |Builder|Collection|Favorites
    {
        return $this->service->createModel($request->validated());

    }

    /**
     * @param $favorites_id
     * @return FavoritesResource
     * @throws Throwable
     */
    public function show(int $favorites_id)
    {
        return new FavoritesResource( $this->service->getModelById( $favorites_id ));
    }

    /**
     * @param UpdateFavoritesRequest $request
     * @param int $favorites_id
     * @return array|Favorites|Collection|Builder
     * @throws Throwable
     */
    public function update(UpdateFavoritesRequest $request, int $favorites_id): array |Favorites|Collection|Builder
    {
        return $this->service->updateModel($request->validated(), $favorites_id);

    }

    /**
     * @param int $favorites_id
     * @return array|Builder|Collection|Favorites
     * @throws Throwable
     */
    public function destroy(int $favorites_id): array |Builder|Collection|Favorites
    {
        return $this->service->deleteModel($favorites_id);
    }
}

