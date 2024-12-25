<?php

namespace App\Http\Requests\StoreRequest;

use Illuminate\Foundation\Http\FormRequest;

class StoreLogsRequest extends FormRequest
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
              'action' => ['required', 'string', 'max:255'],
              'target_id' => ['required', 'integer'],
              'target_type' => ['required', 'string', 'max:50'],
              'user_id' => ['required', 'exists:users,id'],
        ];
    }
}
