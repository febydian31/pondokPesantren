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
            'nisn' => 'required|string|max:50',
            'birth' => 'required|date',
            'gender' => 'required|in:laki-laki,perempuan',
            'address' => 'required|string',
            'father_name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'father_address' => 'required|string',
            'mother_address' => 'required|string',
            'father_job' => 'required|string|max:100',
            'mother_job' => 'required|string|max:100',
            'no_telp' => 'required|string|max:20',
            'education_level' => 'required|in:mts,ma,kuliah,lulus',
            'student_category' => 'required|in:reguler,dhuafa,yatim_piatu',
        ];
        
    }
}
