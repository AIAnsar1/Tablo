<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PaymentsResource extends JsonResource
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
            'status' => $this->status,
            'service_type' => $this->service_type,
            'payment_method' => $this->payment_method,
            'amount' => $this->amount,
            'user_id' => UserResource::collection($this->whenLoaded('users')),
            'advertisement_id' => AdvertisementsResource::collection($this->whenLoaded('advertisements')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
