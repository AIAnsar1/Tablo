<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FilterValuesResource extends JsonResource
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
            'value' => $this->value,
            'ad_in' => AddressesResource::collection($this->whenLoaded('advertisements')),
            'filter_id' => FiltersResource::collection($this->whenLoaded('filters')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
