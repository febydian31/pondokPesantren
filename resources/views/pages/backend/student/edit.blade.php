@extends('layouts.backend.app', ['title' => 'Edit Data Santri'])

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">Edit Data Santri</h1>
    </div>

    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <form action="{{ route('student.update', $registration->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $registration->name) }}" name="name" placeholder="Nama Legkap">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="no_induk">No Induk Santri </label>
                                    <input type="number" class="form-control @error('no_induk') is-invalid @enderror" value="{{ old('no_induk', $registration->no_induk) }}" name="no_induk" placeholder="no Induk">
                                    @error('no_induk')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="nisn">NISN</label>
                                    <input type="number" class="form-control @error('nisn') is-invalid @enderror" value="{{ old('nisn', $registration->nisn) }}" name="nisn" placeholder="NISN">
                                    @error('nisn')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="birth">Tanggl Lahir</label>
                                    <input type="date" class="form-control @error('birth') is-invalid @enderror" value="{{ old('birth', $registration->birth) }}" name="birth" placeholder="Tanggal Lahir">
                                    @error('birth')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <label for="gender">Jenis Kelamin</label>
                                <select name="gender" class="form-control" id="gender">
                                    <option value="laki-laki" {{ old('gender', $registration->gender) == 'laki-laki' ? 'selected' : '' }}>Laki - Laki</option>
                                    <option value="perempuan" {{ old('gender', $registration->gender) == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                                </select>

                            </div>

                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <textarea id="konten" class="form-control @error('address') is-invalid @enderror" placeholder="Alamat" name="address" style="height: 100px">{{ old('address', $registration->address) }}</textarea>
                                @error('address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="father_name">Nama Ayah </label>
                                        <input type="text" class="form-control @error('father_name') is-invalid @enderror" value="{{ old('father_name', $registration->father_name) }}" name="father_name" placeholder="Nama Ayah">
                                        @error('father_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="mother_name">Nama Ibu </label>
                                        <input type="text" class="form-control @error('mother_name') is-invalid @enderror" value="{{ old('mother_name', $registration->mother_name) }}" name="mother_name" placeholder="Nama Ibu">
                                        @error('mother_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="father_job">Pekerjaan Ayah </label>
                                        <input type="text" class="form-control @error('father_job') is-invalid @enderror" value="{{ old('father_job', $registration->father_job) }}" name="father_job"
                                            placeholder="Pekerjaan Ayah">
                                    @error('father_job')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="mother_job">Pekerjaan Ibu</label>
                                        <input type="text" class="form-control @error('mother_job') is-invalid @enderror" value="{{ old('mother_job', $registration->mother_job) }}" name="mother_job"
                                            placeholder="Pekerjaan Ibu">
                                    @error('mother_job')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="father_address">Alamat Ayah </label>
                                    <textarea id="konten_father" class="form-control @error('father_address') is-invalid @enderror" placeholder="alamat" name="father_address" style="height: 100px">{{ old('father_address', $registration->father_address) }}</textarea>
                                    @error('father_address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="mother_address">Alamat Ibu </label>
                                    <textarea id="konten_mother" class="form-control @error('mother_address') is-invalid @enderror" placeholder="alamat" name="mother_address" style="height: 100px">{{ old('mother_address', $registration->mother_address) }}</textarea>
                                    @error('mother_address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror  
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="no_telp">No Telp</label>
                                        <input type="number" class="form-control @error('no_telp') is-invalid @enderror" value="{{ old('no_telp', $registration->no_telp) }}" name="no_telp" placeholder="No Telp">
                                        @error('no_telp')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                    <label>Jenjang Pendidikan</label>
                                    <select name="education_level" class="form-control">
                                        <option value="mts" {{ old('education_level', $registration->education_level) == 'mts' ? 'selected' : '' }}>Mts</option>
                                        <option value="ma" {{ old('education_level', $registration->education_level) == 'ma' ? 'selected' : '' }}>Ma</option>
                                        <option value="kuliah" {{ old('education_level', $registration->education_level) == 'kuliah' ? 'selected' : '' }}>Kuliah</option>
                                        <option value="lulus" {{ old('education_level', $registration->education_level) == 'lulus' ? 'selected' : '' }}>Lulus</option>
                                    </select>

                                </div>
                                <div class="form-group col-md-6">
                                    <label>Kategori Santri</label>
                                    <select name="student_category" class="form-control">
                                        <option value="reguler" {{ old('student_category', $registration->student_category) == 'reguler' ? 'selected' : '' }}>Reguler</option>
                                        <option value="dhufa" {{ old('student_category', $registration->student_category) == 'dhufa' ? 'selected' : '' }}>Dhufa</option>
                                        <option value="yatim_piatu" {{ old('student_category', $registration->student_category) == 'yatim_piatu' ? 'selected' : '' }}>Yatim / Piatu</option>
                                    </select>                   
                                </div>
                                </div>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-between" style="margin-bottom:10px;">
                                <a href="/admin/student" class="button btn btn-info">Kembali</a>
                                <button class="btn btn-success" type="submit">Update</button>
                            </div>
                        </div>
                </form>

            </div>
        </div>
    </div>
@endsection
