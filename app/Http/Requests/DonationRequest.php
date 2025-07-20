<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DonationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'      => 'required|string|max:255',
            'no_telp'   => 'required|string|max:15',
            'nominal'   => 'required|numeric|min:1000',
            'message'   => 'required|string|max:255',
            'category'  => 'required|in:internal,external',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'       => 'Nama tidak boleh kosong.',
            'name.string'         => 'Nama harus berupa teks.',
            'name.max'            => 'Nama terlalu panjang. Maksimal 255 karakter.',

            'no_telp.required'    => 'Nomor telepon tidak boleh kosong.',
            'no_telp.string'      => 'Nomor telepon harus berupa teks.',
            'no_telp.max'         => 'Nomor telepon terlalu panjang. Maksimal 15 karakter.',

            'nominal.required'    => 'Nominal donasi tidak boleh kosong.',
            'nominal.numeric'     => 'Nominal donasi harus berupa angka.',
            'nominal.min'         => 'Nominal donasi minimal Rp 1.000.',

            'message.required'    => 'Pesan tidak boleh kosong.',
            'message.string'      => 'Pesan harus berupa teks.',
            'message.max'         => 'Pesan terlalu panjang. Maksimal 255 karakter.',

            'category.required'   => 'Kategori donasi harus dipilih.',
            'category.in'         => 'Kategori donasi tidak valid. Pilih internal atau external.',
        ];
    }
}
