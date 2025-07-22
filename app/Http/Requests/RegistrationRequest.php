<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'              => 'required|string|max:255',
            'no_induk'          => 'required|string|max:50',
            'nisn'              => 'required|string|max:50',
            'birth'             => 'required|string',
            'gender'            => 'required|in:laki-laki,perempuan',
            'address'           => 'required|string',
            'father_name'       => 'required|string|max:255',
            'mother_name'       => 'required|string|max:255',
            'father_address'    => 'required|string',
            'mother_address'    => 'required|string',
            'father_job'        => 'required|string|max:100',
            'mother_job'        => 'required|string|max:100',
            'no_telp'           => 'required|string|max:20',
            'education_level'   => 'required|in:mi,mts,ma,kuliah,lulus',
            'student_category'  => 'required|in:reguler,dhuafa,yatim_piatu',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'             => 'Nama lengkap tidak boleh kosong.',
            'name.string'               => 'Nama lengkap harus berupa teks.',
            'name.max'                  => 'Nama lengkap terlalu panjang. Maksimal 255 karakter.',

            'no_induk.required'        => 'Nomor induk tidak boleh kosong.',
            'no_induk.string'          => 'Nomor induk harus berupa teks.',
            'no_induk.max'             => 'Nomor induk terlalu panjang. Maksimal 50 karakter.',

            'nisn.required'            => 'NISN tidak boleh kosong.',
            'nisn.string'              => 'NISN harus berupa teks.',
            'nisn.max'                 => 'NISN terlalu panjang. Maksimal 50 karakter.',

            'birth.required'           => 'Tanggal lahir tidak boleh kosong.',
            'birth.string'               => 'Tanggal lahir tidak valid.',

            'gender.required'          => 'Jenis kelamin harus dipilih.',
            'gender.in'                => 'Jenis kelamin hanya bisa laki-laki atau perempuan.',

            'address.required'         => 'Alamat tidak boleh kosong.',
            'address.string'           => 'Alamat harus berupa teks.',

            'father_name.required'     => 'Nama ayah tidak boleh kosong.',
            'father_name.string'       => 'Nama ayah harus berupa teks.',
            'father_name.max'          => 'Nama ayah terlalu panjang. Maksimal 255 karakter.',

            'mother_name.required'     => 'Nama ibu tidak boleh kosong.',
            'mother_name.string'       => 'Nama ibu harus berupa teks.',
            'mother_name.max'          => 'Nama ibu terlalu panjang. Maksimal 255 karakter.',

            'father_address.required'  => 'Alamat ayah tidak boleh kosong.',
            'father_address.string'    => 'Alamat ayah harus berupa teks.',

            'mother_address.required'  => 'Alamat ibu tidak boleh kosong.',
            'mother_address.string'    => 'Alamat ibu harus berupa teks.',

            'father_job.required'      => 'Pekerjaan ayah tidak boleh kosong.',
            'father_job.string'        => 'Pekerjaan ayah harus berupa teks.',
            'father_job.max'           => 'Pekerjaan ayah terlalu panjang. Maksimal 100 karakter.',

            'mother_job.required'      => 'Pekerjaan ibu tidak boleh kosong.',
            'mother_job.string'        => 'Pekerjaan ibu harus berupa teks.',
            'mother_job.max'           => 'Pekerjaan ibu terlalu panjang. Maksimal 100 karakter.',

            'no_telp.required'         => 'Nomor telepon tidak boleh kosong.',
            'no_telp.string'           => 'Nomor telepon harus berupa teks.',
            'no_telp.max'              => 'Nomor telepon terlalu panjang. Maksimal 20 karakter.',

            'education_level.required' => 'Jenjang pendidikan harus dipilih.',
            'education_level.in'       => 'Jenjang pendidikan tidak valid. Pilih salah satu dari mi, mts, ma, kuliah, atau lulus.',

            'student_category.required' => 'Kategori siswa harus dipilih.',
            'student_category.in'       => 'Kategori siswa tidak valid. Pilih salah satu dari reguler, dhuafa, atau yatim piatu.',
        ];
    }
}
