<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
                'history' => 'nullable|array',
                'history.*' => 'nullable|string|max:255',

                'vision' => 'nullable|array',
                'vision.*' => 'nullable|string|max:255',
                
                'mission' => 'nullable|array',
                'mission.*' => 'nullable|string|max:255',

            'organizational_structure' => 'nullable|array',
            'organizational_structure.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

                'programs' => 'nullable|array',
                'programs.*' => 'nullable|string|max:255',

                'donations' => 'nullable|array',
                'donations.*' => 'nullable|string|max:255',

                'social_media' => 'nullable|array',
                'social_media.*' => 'nullable|string|max:255',
            ];
        }

}
