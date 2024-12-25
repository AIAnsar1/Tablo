<?php

namespace App\Http\Controllers;

use App\Http\Resources\LogsResource;
use Illuminate\Http\Request;
use Throwable;
use App\Models\Logs;
use App\Services\LogsService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Requests\StoreRequest\StoreLogsRequest;
use App\Http\Requests\UpdateRequest\UpdateLogsRequest;


class LogsController extends Controller
{
    /**
     * @var LogsService
     */
    private LogsService $service;

    /**
     * @param LogsService $service
     */
    public function __construct(LogsService $service)
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
        return LogsResource::collection( $this->service->paginatedList( $request->all() ) );
    }

    /**
     * @param StoreLogsRequest $request
     * @return array|Builder|Collection|Logs
     * @throws Throwable
     */
    public function store(StoreLogsRequest $request): array |Builder|Collection|Logs
    {
        return $this->service->createModel($request->validated());

    }

    /**
     * @param $logs_id
     * @return LogsResource
     * @throws Throwable
     */
    public function show(int $logs_id)
    {
        return new LogsResource( $this->service->getModelById( $logs_id ));
    }

    /**
     * @param UpdateLogsRequest $request
     * @param int $logs_id
     * @return array|Logs|Collection|Builder
     * @throws Throwable
     */
    public function update(UpdateLogsRequest $request, int $logs_id): array |Logs|Collection|Builder
    {
        return $this->service->updateModel($request->validated(), $logs_id);

    }

    /**
     * @param int $logs_id
     * @return array|Builder|Collection|Logs
     * @throws Throwable
     */
    public function destroy(int $logs_id): array |Builder|Collection|Logs
    {
        return $this->service->deleteModel($logs_id);
    }
}

