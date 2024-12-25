<?php

namespace App\Http\Controllers;

use App\Http\Resources\PaymentsResource;
use Illuminate\Http\Request;
use Throwable;
use App\Models\Payments;
use App\Services\PaymentsService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Requests\StoreRequest\StorePaymentsRequest;
use App\Http\Requests\UpdateRequest\UpdatePaymentsRequest;


class PaymentsController extends Controller
{
    /**
     * @var PaymentsService
     */
    private PaymentsService $service;

    /**
     * @param PaymentsService $service
     */
    public function __construct(PaymentsService $service)
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
        return PaymentsResource::collection( $this->service->paginatedList( $request->all() ) );
    }

    /**
     * @param StorePaymentsRequest $request
     * @return array|Builder|Collection|Payments
     * @throws Throwable
     */
    public function store(StorePaymentsRequest $request): array |Builder|Collection|Payments
    {
        return $this->service->createModel($request->validated());

    }

    /**
     * @param $payments_id
     * @return PaymentsResource
     * @throws Throwable
     */
    public function show(int $payments_id)
    {
        return new PaymentsResource( $this->service->getModelById( $payments_id ));
    }

    /**
     * @param UpdatePaymentsRequest $request
     * @param int $payments_id
     * @return array|Payments|Collection|Builder
     * @throws Throwable
     */
    public function update(UpdatePaymentsRequest $request, int $payments_id): array |Payments|Collection|Builder
    {
        return $this->service->updateModel($request->validated(), $payments_id);

    }

    /**
     * @param int $payments_id
     * @return array|Builder|Collection|Payments
     * @throws Throwable
     */
    public function destroy(int $payments_id): array |Builder|Collection|Payments
    {
        return $this->service->deleteModel($payments_id);
    }
}

