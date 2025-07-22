@extends('layouts.frontend.app', ['title' => 'Halaman Pendaftaran'])

@section('content')
    <section class="top">
        <div class="artikel">
            <div class="judul container">
                <h1>Pendaftaran</h1>
                <p>Mulailah perjalanan pendidikan Anda bersama Panti Asuhan dan Pondok Pesantren Zuhriyah. </p>
                <p>Daftarkan diri Anda pada program-program kami dan bergabunglah dengan komunitas pembelajaran dan
                    pertumbuhan kami.</p>
            </div>
        </div>
    </section>

    <section class="container pendaftaran-form">
        <div class="head-pendaftaran">
            <h2>Form Pendaftaran</h2>
        </div>
        <div class="">
            <form id="pendaftaran" class="pendaftaran" action="{{ route('frontend.registration.store') }}" method="POST">
                @csrf
                <div class="">
                    <h2>Data Santri </h2>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name') }}" name="name" placeholder="Nama Legkap">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="no_induk">No Induk Santri </label>
                            <input type="number" class="form-control @error('no_induk') is-invalid @enderror"
                                value="{{ old('no_induk') }}" name="no_induk" placeholder="noInduk">
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
                            <input type="number" class="form-control @error('nisn') is-invalid @enderror"
                                value="{{ old('nisn') }}" name="nisn" placeholder="NISN">
                            @error('nisn')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="birth">Tanggl Lahir</label>
                            <input type="date" class="form-control @error('birth') is-invalid @enderror"
                                value="{{ old('birth') }}" name="birth" placeholder="Tanggal Lahir">
                            @error('birth')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label>Jenis Kelamin</label>
                            <select name="gender" class="form-control @error('gender') is-invalid @enderror">
                                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                <option value="laki-laki">Laki - Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                            @error('gender')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address">Alamat</label>
                        <textarea class="form-control @error('address') is-invalid @enderror" placeholder="Alamat" name="address"
                            style="height: 100px">{{ old('address') }}</textarea>
                        @error('address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <h2>Data Orang Tua / Wali</h2>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="father_name">Nama Ayah </label>
                                <input type="text" class="form-control @error('father_name') is-invalid @enderror"
                                    value="{{ old('father_name') }}" name="father_name" placeholder="Nama Ayah">
                                @error('father_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mother_name">Nama Ibu </label>
                                <input type="text" class="form-control @error('mother_name') is-invalid @enderror"
                                    value="{{ old('mother_name') }}" name="mother_name" placeholder="Nama Ibu">
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
                                <input type="text" class="form-control @error('father_job') is-invalid @enderror"
                                    value="{{ old('father_job') }}" name="father_job" placeholder="Pekerjaan Ayah">
                                @error('father_job')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mother_job">Pekerjaan Ibu</label>
                                <input type="text" class="form-control @error('mother_job') is-invalid @enderror"
                                    value="{{ old('mother_job') }}" name="mother_job" placeholder="Pekerjaan Ibu">
                                @error('mother_job')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="father_address">Alamat Ayah </label>
                            <textarea class="form-control @error('father_address') is-invalid @enderror" placeholder="alamat" name="father_address"
                                style="height: 100px">{{ old('father_address') }}</textarea>
                            @error('father_address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="mother_address">Alamat Ibu </label>
                            <textarea class="form-control @error('mother_address') is-invalid @enderror" placeholder="alamat"
                                name="mother_address" style="height: 100px">{{ old('mother_address') }}</textarea>
                            @error('mother_address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label for="no_telp">No Telp </label>
                            <input type="number" class="form-control @error('no_telp') is-invalid @enderror"
                                value="{{ old('no_telp') }}" name="no_telp" placeholder="No Telp">
                            @error('no_telp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <h2>Persyaratan Lainnya </h2>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Jenjang Pendidikan</label>
                                <select name="education_level"
                                    class="form-control @error('education_level') is-invalid @enderror">
                                    <option value="" disabled selected>Pilih Jenjang Pendidikan</option>
                                    <option value="mi">MI</option>
                                    <option value="mts">MTS</option>
                                    <option value="ma">MA</option>
                                    <option value="kuliah">Kuliah</option>
                                    <option value="lulus">Lulus</option>
                                </select>
                                @error('education_level')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kategori Santri</label>
                                <select name="student_category"
                                    class="form-control @error('student_category') is-invalid @enderror">
                                    <option value="" disabled selected>Pilih Kategori Santri</option>
                                    <option value="reguler">Reguler</option>
                                    <option value="dhuafa">Dhuafa</option>
                                    <option value="yatim_piatu">Yatim / Piatu</option>
                                </select>
                                @error('student_category')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="button">
                        <button type="submit">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
