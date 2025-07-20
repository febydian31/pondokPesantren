<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Carbon;

class AchievementRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'date'         => 'required|string',
            'achievement'  => 'required|string|max:255',
            'level'        => 'required|string|max:100',
            'organizer'    => 'required|string|max:255',
            'winner'       => 'required|string|max:100',
        ];
    }

    public function messages(): array
    {
        return [
            'date.required'         => 'Tanggal tidak boleh kosong.',
            'date.string'           => 'Format tanggal tidak valid.',
            'achievement.required'  => 'Prestasi tidak boleh kosong.',
            'achievement.string'    => 'Prestasi harus berupa teks.',
            'achievement.max'       => 'Prestasi terlalu panjang. Maksimal 255 karakter.',
            'level.required'        => 'Tingkat pencapaian tidak boleh kosong.',
            'level.string'          => 'Tingkat pencapaian harus berupa teks.',
            'level.max'             => 'Tingkat pencapaian terlalu panjang. Maksimal 100 karakter.',
            'organizer.required'    => 'Nama penyelenggara tidak boleh kosong.',
            'organizer.string'      => 'Nama penyelenggara harus berupa teks.',
            'organizer.max'         => 'Nama penyelenggara terlalu panjang. Maksimal 255 karakter.',
            'winner.required'       => 'Keterangan juara/pemenang tidak boleh kosong.',
            'winner.string'         => 'Keterangan juara/pemenang harus berupa teks.',
            'winner.max'            => 'Keterangan juara/pemenang terlalu panjang. Maksimal 100 karakter.',
        ];
    }
}
