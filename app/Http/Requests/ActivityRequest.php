<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class ActivityRequest extends FormRequest
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
            'day' => 'required|string|max:255',
            'time' => 'required|date_format:H:i',
            'activity' => 'required|string|max:255',
            'mentor' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'day.required' => 'Kolom hari wajib diisi.',
            'day.string' => 'Kolom hari harus berupa teks.',
            'day.max' => 'Kolom hari tidak boleh lebih dari 255 karakter.',

            'time.required' => 'Kolom waktu wajib diisi.',
            'time.date_format' => 'Format waktu harus dalam format HH:ii (contoh: 14:30).',

            'activity.required' => 'Kolom aktivitas wajib diisi.',
            'activity.string' => 'Kolom aktivitas harus berupa teks.',
            'activity.max' => 'Kolom aktivitas tidak boleh lebih dari 255 karakter.',

            'mentor.required' => 'Kolom mentor wajib diisi.',
            'mentor.string' => 'Kolom mentor harus berupa teks.',
            'mentor.max' => 'Kolom mentor tidak boleh lebih dari 255 karakter.',

            'location.required' => 'Kolom lokasi wajib diisi.',
            'location.string' => 'Kolom lokasi harus berupa teks.',
            'location.max' => 'Kolom lokasi tidak boleh lebih dari 255 karakter.',
        ];
    }
}
