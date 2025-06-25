@extends('layouts.admin.app')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid " >

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Data</h1>
                    </div>

                    <div class="card shadow mb-4" style="max-width: 750px; margin: 30px auto;">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <form action="{{ route('pendaftaran.store') }}" method="POST" id="pendaftaran" class="pendaftaran">
                                        @csrf
                                        <div class="">
                                            <h2>Data Santri </h2>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="nama">Nama</label>
                                                    <input type="text" class="form-control" name="nama" placeholder="Nama Legkap">
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
                                                    <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="donation-amount">Jenis Kelamin</label>
                                                <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                                                    @foreach($jenisKelamin as $gender)
                                                        <option value="{{ $gender }}" {{ old('jenisKelamin') == $gender ? 'selected' : '' }}>
                                                            {{ $gender }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="donation-amount">Alamat</label>
                                                <textarea class="form-control" placeholder="alamat" name="alamat" style="height: 100px"></textarea>
                                            </div>
                                            <div class="form-group">
                                            
                                            <h2>Data Orang Tua / Wali</h2>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="nama_ayah">Nama Ayah </label>
                                                    <input type="text" class="form-control" name="nama_ayah" placeholder="Nama Ayah">
                                                </div>
                                                <div class="form-group col-md-6">
                                                <label for="nama_ibu">Nama Ibu  </label>
                                                    <input type="text" class="form-control" name="nama_ibu" placeholder="Nama Ibu">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="pekerjaan_ayah">Pekerjaan Ayah </label>
                                                    <input type="text" class="form-control" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah">
                                                </div>
                                                <div class="form-group col-md-6">
                                                <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                                    <input type="text" class="form-control" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat_ayah">Alamat Ayah </label>
                                                <textarea class="form-control" placeholder="alamat" name="alamat_ayah" style="height: 100px"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat_ibu">Alamat Ibu </label>
                                                <textarea class="form-control" placeholder="alamat" name="alamat_ibu" style="height: 100px"></textarea>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="no_telp">No Telp </label>
                                                <input type="number" class="form-control" name="no_telp" placeholder="No Telp">
                                            </div>
                                            <h2>Persyaratan Lainnya </h2>
                                            <div class="form-group">
                                                <label for="donation-amount">Jenjang Pendidikan</label>
                                                <select class="form-select" name="jenjang_pendidikan" aria-label="Default select example">
                                                    @foreach($jenjangPendidikan as $pendidikan)
                                                        <option value="{{ $pendidikan }}" {{ old('jenjangPendidikan') == $pendidikan ? 'selected' : '' }}>
                                                            {{ $pendidikan }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="donation-amount">Kategori Santri</label>
                                                <select class="form-select" name="kategori_santri" aria-label="Default select example">
                                                    @foreach($kategoriSantri as $kategori)
                                                        <option value="{{ $kategori }}" {{ old('kategoriSantri') == $kategori ? 'selected' : '' }}>
                                                            {{ $kategori }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <!-- <label for="akte">Akte Kelahiran :</label><br />
                                            <input type="file" id="akte" name="akte" accept=".pdf,.jpg,.png" required><br /><br /> -->
                                            <!-- <label for="ijazah">Ijazah :</label><br />
                                            <input type="file" id="ijazah" name="ijazah" accept=".pdf,.jpg,.png" required><br /><br />
                                            <label for="kk">Kartu Keluarga :</label><br />
                                            <input type="file" id="kk" name="kk" accept=".pdf,.jpg,.png" required><br /><br />
                                            <label for="ktp">KTP :</label><br />
                                            <input type="file" id="ktp" name="ktp" accept=".pdf,.jpg,.png" required><br /><br />
                                            <label for="bpjs">BPJS / KIP :</label><br />
                                            <input type="file" id="bpjs" name="bpjs" accept=".pdf,.jpg,.png" required><br /><br /> -->
                                            
                                        </div>
                                        <!-- <button type="submit" id="submitBtn" style="">Submit</button> -->
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-between" style="margin-bottom:10px; ">
                                            <a href="/prestasi" class="button btn btn-info">Kembali</a>
                                            <button class="btn btn-primary" type="submit">Kirim</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

 @endsection