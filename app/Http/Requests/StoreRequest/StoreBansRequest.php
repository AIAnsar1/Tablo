<?php

namespace App\Http\Requests\StoreRequest;

use Illuminate\Foundation\Http\FormRequest;

class StoreBansRequest extends FormRequest
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
            'reason' => ['required', 'string'],
            'banned_at' => ['required', 'timezone'],
            'expires_at' => ['required', 'timezone'],
            'user_id' => ['required', 'exists:users,id'],
        ];
    }
}
