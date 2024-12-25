<?php

namespace App\Http\Controllers;

use App\Http\Resources\BansResource;
use Illuminate\Http\Request;
use Throwable;
use App\Models\Bans;
use App\Services\BansService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Requests\StoreRequest\StoreBansRequest;
use App\Http\Requests\UpdateRequest\UpdateBansRequest;


class BansController extends Controller
{
    /**
     * @var BansService
     */
    private BansService $service;

    /**
     * @param BansService $service
     */
    public function __construct(BansService $service)
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
        return BansResource::collection( $this->service->paginatedList( $request->all() ) );
    }

    /**
     * @param StoreBansRequest $request
     * @return array|Builder|Collection|Bans
     * @throws Throwable
     */
    public function store(StoreBansRequest $request): array |Builder|Collection|Bans
    {
        return $this->service->createModel($request->validated());

    }

    /**
     * @param $bans_id
     * @return BansResource
     * @throws Throwable
     */
    public function show(int $bans_id)
    {
        return new BansResource( $this->service->getModelById( $bans_id ));
    }

    /**
     * @param UpdateBansRequest $request
     * @param int $bans_id
     * @return array|Bans|Collection|Builder
     * @throws Throwable
     */
    public function update(UpdateBansRequest $request, int $bans_id): array |Bans|Collection|Builder
    {
        return $this->service->updateModel($request->validated(), $bans_id);

    }

    /**
     * @param int $bans_id
     * @return array|Builder|Collection|Bans
     * @throws Throwable
     */
    public function destroy(int $bans_id): array |Builder|Collection|Bans
    {
        return $this->service->deleteModel($bans_id);
    }
}

