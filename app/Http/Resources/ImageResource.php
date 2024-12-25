<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ImageResource extends JsonResource
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
            'image_url' => $this->image_url,
            'uploaded_at' => $this->uploaded_at,
            'ad_id' => AdvertisementsResource::collection($this->whenLoaded('advertisements')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
