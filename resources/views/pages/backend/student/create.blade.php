@extends('layouts.backend.app', ['title' => 'Tambah Santri'])

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">Add Data Santri</h1>
    </div>

    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <form action="{{ route('student.store') }}" method="POST">
                    @csrf
                        <div class="">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" placeholder="Contoh : Ahmad Ibrahim">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="no_induk">No Induk Santri </label>
                                    <input type="number" class="form-control @error('no_induk') is-invalid @enderror" value="{{ old('no_induk') }}" name="no_induk" placeholder="Contoh : 129334834343423">
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
                                    <input type="number" class="form-control @error('nisn') is-invalid @enderror" value="{{ old('nisn') }}" name="nisn" placeholder="Contoh : 004322864">
                                    @error('nisn')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="birth">Tanggl Lahir</label>
                                    <input type="date" class="form-control @error('birth') is-invalid @enderror" value="{{ old('birth') }}" name="birth" placeholder="Tanggal Lahir">
                                    @error('birth')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Jenis Kelamin</label>
                                    <select name="gender">
                                        <option value="laki-laki">Laki - Laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <input id="x" type="hidden" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}">
                                <trix-editor input="x" ></trix-editor>
                                @error('address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="father_name">Nama Ayah </label>
                                        <input type="text" class="form-control @error('father_name') is-invalid @enderror" value="{{ old('father_name') }}" name="father_name" placeholder="Contoh : Paijo">
                                        @error('father_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="mother_name">Nama Ibu </label>
                                        <input type="text" class="form-control @error('mother_name') is-invalid @enderror" value="{{ old('mother_name') }}" name="mother_name" placeholder="Contoh : Sumina">
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
                                        <input type="text" class="form-control @error('father_job') is-invalid @enderror" value="{{ old('father_job') }}" name="father_job"
                                            placeholder="Contoh : Jl.Cendrawasih">
                                    @error('father_job')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="mother_job">Pekerjaan Ibu</label>
                                        <input type="text" class="form-control @error('mother_job') is-invalid @enderror" value="{{ old('mother_job') }}" name="mother_job"
                                            placeholder="Contoh : Jl.Cendrawasih">
                                    @error('mother_job')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="father_address">Alamat Ayah </label>
                                    <input id="father_address" type="hidden" name="father_address" class="form-control @error('father_address') is-invalid @enderror" value="{{ old('father_address') }}">
                                    <trix-editor input="father_address" ></trix-editor>
                                    @error('father_address')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="mother_address">Alamat Ibu </label>
                                    <input id="mother_address" type="hidden" name="mother_address" class="form-control @error('mother_address') is-invalid @enderror" value="{{ old('mother_address') }}">
                                    <trix-editor input="mother_address" ></trix-editor>
                                    @error('mother_address')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror                                    
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="no_telp">No Telp</label>
                                        <input type="number" class="form-control @error('no_telp') is-invalid @enderror" value="{{ old('no_telp') }}" name="no_telp" placeholder="Contoh : 0812">
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
                                        <select name="education_level">
                                            <option value="mts">Mts</option>
                                            <option value="ma">Ma</option>
                                            <option value="kuliah">Kuliah</option>
                                            <option value="lulus">Lulus</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Kategori Santri</label>
                                        <select name="student_category">
                                            <option value="reguler">Reguler</option>
                                            <option value="dhuafa">Dhuafa</option>
                                            <option value="yatim_piatu">Yatim / Piatu</option>
                                        </select>
                                    </div>
                                    </div>
                                </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-between" style="margin-bottom:10px;">
                                <a href="/admin/student" class="button btn btn-info">Kembali</a>
                                <button class="btn btn-success" type="submit">Tambah</button>
                            </div>
                        </div>
                </form>

            </div>
        </div>
    </div>
@endsection
