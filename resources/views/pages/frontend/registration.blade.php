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
                <form id="pendaftaran" class="pendaftaran" action="{{ route('frontend.registration.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="">
                            <h2>Data Santri </h2>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" name="name" placeholder="Nama Legkap">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="noInduk">No Induk Santri </label>
                                    <input type="number" class="form-control" name="no_induk" placeholder="noInduk">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="NISN">NISN</label>
                                    <input type="number" class="form-control" name="NISN" placeholder="NISN">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="date">Tanggl Lahir</label>
                                    <input type="date" class="form-control" name="birth" placeholder="Tanggal Lahir">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="date">Jenis Kelamin</label>
                                    <select name="gender">
                                        <option value="male">Laki - Laki</option>
                                        <option value="female">Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="donation-amount">Alamat</label>
                                <textarea class="form-control" placeholder="Alamat" name="address" style="height: 100px"></textarea>
                            </div>
                            <div class="form-group">
                                <h2>Data Orang Tua / Wali</h2>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="nama_ayah">Nama Ayah </label>
                                        <input type="text" class="form-control" name="father_name" placeholder="Nama Ayah">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nama_ibu">Nama Ibu </label>
                                        <input type="text" class="form-control" name="mother_name" placeholder="Nama Ibu">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="pekerjaan_ayah">Pekerjaan Ayah </label>
                                        <input type="text" class="form-control" name="father_job"
                                            placeholder="Pekerjaan Ayah">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                        <input type="text" class="form-control" name="mother_job"
                                            placeholder="Pekerjaan Ibu">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat_ayah">Alamat Ayah </label>
                                    <textarea class="form-control" placeholder="alamat" name="father_address" style="height: 100px"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="alamat_ibu">Alamat Ibu </label>
                                    <textarea class="form-control" placeholder="alamat" name="mother_address" style="height: 100px"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="no_telp">No Telp </label>
                                    <input type="number" class="form-control" name="no_telp" placeholder="No Telp">
                                </div>
                                <h2>Persyaratan Lainnya </h2>
                                
                                <div class="form-group col-md-12">
                                    <label for="no_telp">Jenjang Pendidikan</label>
                                    <input type="text" class="form-control" name="education_level" placeholder="Jenjang Pendidikan">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="no_telp">Kategori Santri</label>
                                    <input type="text" class="form-control" name="student_category" placeholder="Kategori Santri">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="no_telp">File</label>
                                    <input type="file" class="form-control" name="file_upload" placeholder="No Telp">
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
