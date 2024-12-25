<?php

namespace App\Http\Controllers;

use App\Http\Resources\FilterValuesResource;
use Illuminate\Http\Request;
use Throwable;
use App\Models\FilterValues;
use App\Services\FilterValuesService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Requests\StoreRequest\StoreFilterValuesRequest;
use App\Http\Requests\UpdateRequest\UpdateFilterValuesRequest;


class FilterValuesController extends Controller
{
    /**
     * @var FilterValuesService
     */
    private FilterValuesService $service;

    /**
     * @param FilterValuesService $service
     */
    public function __construct(FilterValuesService $service)
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
        return FilterValuesResource::collection( $this->service->paginatedList( $request->all() ) );
    }

    /**
     * @param StoreFilterValuesRequest $request
     * @return array|Builder|Collection|FilterValues
     * @throws Throwable
     */
    public function store(StoreFilterValuesRequest $request): array |Builder|Collection|FilterValues
    {
        return $this->service->createModel($request->validated());

    }

    /**
     * @param $filtervalues_id
     * @return FilterValuesResource
     * @throws Throwable
     */
    public function show(int $filtervalues_id)
    {
        return new FilterValuesResource( $this->service->getModelById( $filtervalues_id ));
    }

    /**
     * @param UpdateFilterValuesRequest $request
     * @param int $filtervalues_id
     * @return array|FilterValues|Collection|Builder
     * @throws Throwable
     */
    public function update(UpdateFilterValuesRequest $request, int $filtervalues_id): array |FilterValues|Collection|Builder
    {
        return $this->service->updateModel($request->validated(), $filtervalues_id);

    }

    /**
     * @param int $filtervalues_id
     * @return array|Builder|Collection|FilterValues
     * @throws Throwable
     */
    public function destroy(int $filtervalues_id): array |Builder|Collection|FilterValues
    {
        return $this->service->deleteModel($filtervalues_id);
    }
}

