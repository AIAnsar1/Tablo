<?php

namespace App\Http\Controllers;

use App\Http\Resources\MessagesResource;
use Illuminate\Http\Request;
use Throwable;
use App\Models\Messages;
use App\Services\MessagesService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Requests\StoreRequest\StoreMessagesRequest;
use App\Http\Requests\UpdateRequest\UpdateMessagesRequest;


class MessagesController extends Controller
{
    /**
     * @var MessagesService
     */
    private MessagesService $service;

    /**
     * @param MessagesService $service
     */
    public function __construct(MessagesService $service)
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
        return MessagesResource::collection( $this->service->paginatedList( $request->all() ) );
    }

    /**
     * @param StoreMessagesRequest $request
     * @return array|Builder|Collection|Messages
     * @throws Throwable
     */
    public function store(StoreMessagesRequest $request): array |Builder|Collection|Messages
    {
        return $this->service->createModel($request->validated());

    }

    /**
     * @param $messages_id
     * @return MessagesResource
     * @throws Throwable
     */
    public function show(int $messages_id)
    {
        return new MessagesResource( $this->service->getModelById( $messages_id ));
    }

    /**
     * @param UpdateMessagesRequest $request
     * @param int $messages_id
     * @return array|Messages|Collection|Builder
     * @throws Throwable
     */
    public function update(UpdateMessagesRequest $request, int $messages_id): array |Messages|Collection|Builder
    {
        return $this->service->updateModel($request->validated(), $messages_id);

    }

    /**
     * @param int $messages_id
     * @return array|Builder|Collection|Messages
     * @throws Throwable
     */
    public function destroy(int $messages_id): array |Builder|Collection|Messages
    {
        return $this->service->deleteModel($messages_id);
    }
}

