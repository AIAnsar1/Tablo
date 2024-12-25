<?php

namespace App\Http\Requests\StoreRequest;

use Illuminate\Foundation\Http\FormRequest;

class StoreMessagesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
              'content' => ['required', 'string'],
              'is_read' => ['required', 'boolean'],
              'sent_at' => ['required', 'timezone'],
              'ad_in' => ['required', 'exists:advertisements,id'],
              'sender_id' => ['required', 'exists:users,id'],
              'receiver_id' => ['required', 'exists:users,id'],
        ];
    }
}
