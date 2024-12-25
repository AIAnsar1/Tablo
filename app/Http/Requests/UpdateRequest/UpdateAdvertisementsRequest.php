<?php

namespace App\Http\Requests\UpdateRequest;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdvertisementsRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'price' => ['required', 'integer'],
            'location' => ['required', 'string', 'max:255'],
            'views_count' => ['required', 'integer'],
            'is_active' => ['required', 'boolean'],
            'is_featured' => ['required', 'boolean'],
            'user_id' => ['required', 'exists:users,id'],
            'category_id' => ['required', 'exists:categories,id'],
        ];
    }
}
