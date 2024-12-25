<?php

namespace App\Http\Resources;

use App\Models\Advertisements;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FavoritesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        parent::toArray($request);

        return [
            'id' => $this->id,
            'added_at' => $this->added_at,
            'user_id' => UserResource::collection($this->whenLoaded('user')),
            'advertisement_id' => AdvertisementsResource::collection($this->whenLoaded('advertisements')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
