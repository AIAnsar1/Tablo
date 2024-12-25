<?php

namespace App\Http\Controllers;

use App\Http\Resources\FiltersResource;
use Illuminate\Http\Request;
use Throwable;
use App\Models\Filters;
use App\Services\FiltersService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Requests\StoreRequest\StoreFiltersRequest;
use App\Http\Requests\UpdateRequest\UpdateFiltersRequest;


class FiltersController extends Controller
{
    /**
     * @var FiltersService
     */
    private FiltersService $service;

    /**
     * @param FiltersService $service
     */
    public function __construct(FiltersService $service)
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
        return FiltersResource::collection( $this->service->paginatedList( $request->all() ) );
    }

    /**
     * @param StoreFiltersRequest $request
     * @return array|Builder|Collection|Filters
     * @throws Throwable
     */
    public function store(StoreFiltersRequest $request): array |Builder|Collection|Filters
    {
        return $this->service->createModel($request->validated());

    }

    /**
     * @param $filters_id
     * @return FiltersResource
     * @throws Throwable
     */
    public function show(int $filters_id)
    {
        return new FiltersResource( $this->service->getModelById( $filters_id ));
    }

    /**
     * @param UpdateFiltersRequest $request
     * @param int $filters_id
     * @return array|Filters|Collection|Builder
     * @throws Throwable
     */
    public function update(UpdateFiltersRequest $request, int $filters_id): array |Filters|Collection|Builder
    {
        return $this->service->updateModel($request->validated(), $filters_id);

    }

    /**
     * @param int $filters_id
     * @return array|Builder|Collection|Filters
     * @throws Throwable
     */
    public function destroy(int $filters_id): array |Builder|Collection|Filters
    {
        return $this->service->deleteModel($filters_id);
    }
}

