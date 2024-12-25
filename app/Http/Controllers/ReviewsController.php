<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReviewsResource;
use Illuminate\Http\Request;
use Throwable;
use App\Models\Reviews;
use App\Services\ReviewsService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Requests\StoreRequest\StoreReviewsRequest;
use App\Http\Requests\UpdateRequest\UpdateReviewsRequest;


class ReviewsController extends Controller
{
    /**
     * @var ReviewsService
     */
    private ReviewsService $service;

    /**
     * @param ReviewsService $service
     */
    public function __construct(ReviewsService $service)
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
        return ReviewsResource::collection( $this->service->paginatedList( $request->all() ) );
    }

    /**
     * @param StoreReviewsRequest $request
     * @return array|Builder|Collection|Reviews
     * @throws Throwable
     */
    public function store(StoreReviewsRequest $request): array |Builder|Collection|Reviews
    {
        return $this->service->createModel($request->validated());

    }

    /**
     * @param $reviews_id
     * @return ReviewsResource
     * @throws Throwable
     */
    public function show(int $reviews_id)
    {
        return new ReviewsResource( $this->service->getModelById( $reviews_id ));
    }

    /**
     * @param UpdateReviewsRequest $request
     * @param int $reviews_id
     * @return array|Reviews|Collection|Builder
     * @throws Throwable
     */
    public function update(UpdateReviewsRequest $request, int $reviews_id): array |Reviews|Collection|Builder
    {
        return $this->service->updateModel($request->validated(), $reviews_id);

    }

    /**
     * @param int $reviews_id
     * @return array|Builder|Collection|Reviews
     * @throws Throwable
     */
    public function destroy(int $reviews_id): array |Builder|Collection|Reviews
    {
        return $this->service->deleteModel($reviews_id);
    }
}

