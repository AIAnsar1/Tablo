<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MessagesResource extends JsonResource
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
            'content' => $this->content,
            'is_read' => $this->is_read,
            'sent_at' => $this->sent_at,
            'ad_in' => $this->ad_in,
            'sender_id' => $this->sender_id,
            'receiver_id' => $this->receiver_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
