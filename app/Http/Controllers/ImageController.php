<?php

namespace App\Http\Controllers;

use App\Http\Resources\ImageResource;
use Illuminate\Http\Request;
use Throwable;
use App\Models\Image;
use App\Services\ImageService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Requests\StoreRequest\StoreImageRequest;
use App\Http\Requests\UpdateRequest\UpdateImageRequest;


class ImageController extends Controller
{
    /**
     * @var ImageService
     */
    private ImageService $service;

    /**
     * @param ImageService $service
     */
    public function __construct(ImageService $service)
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
        return ImageResource::collection( $this->service->paginatedList( $request->all() ) );
    }

    /**
     * @param StoreImageRequest $request
     * @return array|Builder|Collection|Image
     * @throws Throwable
     */
    public function store(StoreImageRequest $request): array |Builder|Collection|Image
    {
        return $this->service->createModel($request->validated());

    }

    /**
     * @param $image_id
     * @return ImageResource
     * @throws Throwable
     */
    public function show(int $image_id)
    {
        return new ImageResource( $this->service->getModelById( $image_id ));
    }

    /**
     * @param UpdateImageRequest $request
     * @param int $image_id
     * @return array|Image|Collection|Builder
     * @throws Throwable
     */
    public function update(UpdateImageRequest $request, int $image_id): array |Image|Collection|Builder
    {
        return $this->service->updateModel($request->validated(), $image_id);

    }

    /**
     * @param int $image_id
     * @return array|Builder|Collection|Image
     * @throws Throwable
     */
    public function destroy(int $image_id): array |Builder|Collection|Image
    {
        return $this->service->deleteModel($image_id);
    }
}

