@extends('layouts.main')
@section('content')


    <section class="top">
        <div class="artikel">
            <div class="judul container">
                <h1>Pendaftaran</h1>
                <p>Mulailah perjalanan pendidikan Anda bersama Panti Asuhan dan Pondok Pesantren Zuhriyah. </p>
                <p>Daftarkan diri Anda pada program-program kami dan bergabunglah dengan komunitas pembelajaran dan pertumbuhan kami.</p>
            </div>
        </div>
    </section>

    <section class="container pendaftaran-form">
        <div class="head-pendaftaran">
            <h2>Form Pendaftaran</h2>
        </div>
            <form id="pendaftaran" class="pendaftaran">
                    <div class="">
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
                                    </form> 
                    </div>
                    <div class="button">
                        <button type="submit">Kirim</button>
                    </div>
            </form>

    </section>

  @endsection