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
    // app/Http/Requests/StoreProfileRequest.php

    public function rules()
    {
        return [
            'history' => 'nullable|array',
            'history.*' => 'nullable|string',
            'vision' => 'nullable|array',
            'vision.*' => 'nullable|string',
            'mission' => 'nullable|array',
            'mission.*' => 'nullable|string',
            'programs' => 'nullable|array',
            'programs.*' => 'nullable|string',
            'donations' => 'nullable|array',
            'donations.*' => 'nullable|string',
            'social_media' => 'nullable|array',
            'social_media.*' => 'nullable|string',
            'organizational_structure' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'ig'       => 'nullable|string|max:255',
            'fb'       => 'nullable|string|max:255',
            'email'    => 'nullable|email|max:255',
            'wa'       => 'nullable|string|max:100',
            'location' => 'nullable|string|max:255',
            'tiktok'   => 'nullable|string|max:255',
            'vidio'   => 'nullable|string',
        ];
    }


}
