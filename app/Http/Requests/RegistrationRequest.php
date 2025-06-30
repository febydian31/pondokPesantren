<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'no_induk' => 'required|string|max:50',
            'NISN' => 'required|string|max:50',
            'birth' => 'required|date',
            'gender' => 'required|in:male,female',
            'address' => 'required|string',
            'father_name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'father_address' => 'required|string',
            'mother_address' => 'required|string',
            'father_job' => 'required|string|max:100',
            'mother_job' => 'required|string|max:100',
            'no_telp' => 'required|string|max:20',
            'education_level' => 'required|string|max:50',
            'student_category' => 'required|string|max:100',
            'file_upload' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ];
        
    }
}
