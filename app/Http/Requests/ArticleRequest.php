<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
        $rules = [
            'date'    => 'nullable|date_format:d-m-Y',
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
        ];

        if ($this->isMethod('post')) {
            $rules['image'] = 'required|image|mimes:jpg,jpeg,png|max:2048';
        } else {
            $rules['image'] = 'nullable|image|mimes:jpg,jpeg,png|max:2048';
        }

        return $rules;
    }

    public function messages(): array
    {
        return [
            'title.required'   => 'Judul artikel tidak boleh kosong.',
            'title.max'        => 'Judul artikel terlalu panjang, maksimal 255 karakter.',
            'content.required' => 'Konten artikel tidak boleh kosong.',
            'image.required'   => 'Gambar artikel tidak boleh kosong.',
            'image.image'      => 'Berkas yang diunggah harus berupa gambar.',
            'image.mimes'      => 'Format gambar harus jpg, jpeg, atau png.',
            'image.max'        => 'Ukuran gambar maksimal 2 MB.',
        ];
    }
}
