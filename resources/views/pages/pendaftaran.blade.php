@extends('layouts.main')
@section('content')


    <section class="top">
        <div class="artikel">
            <div class="judul container">
                <h1>Pendaftaran</h1>
                <p>Mulailah perjalanan pendidikan Anda bersama Pondok Pesantren Zuhriyah. </p>
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
                        <h2>Data Santri </h2>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="Nama Legkap">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="noInduk">No Induk Santri </label>
                                <input type="number" class="form-control" id="noInduk" placeholder="noInduk">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="number">NISN</label>
                                <input type="number" class="form-control" id="number" placeholder="NISN">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="date">Tanggl Lahir</label>
                                <input type="date" class="form-control" id="date" placeholder="Tanggal Lahir">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="donation-amount">Jenis Kelamin</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="1">Laki - Laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="donation-amount">Alamat</label>
                            <textarea class="form-control" placeholder="alamat" id="alamat" style="height: 100px"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="donation-amount">Jenjang Pendidikan</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Jenjang Pendidikan</option>
                                <option value="1">MTS</option>
                                <option value="2">MA</option>
                                <option value="3">KULIAH</option>
                                <option value="4">LULUS</option>
                            </select>
                        </div>
                        <h2>Data Orang Tua / Wali</h2>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="nama">Nama Ayah </label>
                                <input type="text" class="form-control" id="nama" placeholder="Nama Ayah">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="noInduk">Nama Ibu  </label>
                                <input type="text" class="form-control" id="noInduk" placeholder="Nama Ibu">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="number">Pekerjaan Ayah </label>
                                <input type="date" class="form-control" id="number" placeholder="Pekerjaan Ayah">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="date">Pekerjaan Ibu</label>
                                <input type="date" class="form-control" id="date" placeholder="Pekerjaan Ibu">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="donation-amount">Alamat Ayah </label>
                            <textarea class="form-control" placeholder="alamat" id="alamat" style="height: 100px"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="donation-amount">Alamat Ibu </label>
                            <textarea class="form-control" placeholder="alamat" id="alamat" style="height: 100px"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="nama">No Telp </label>
                            <input type="number" class="form-control" id="nama" placeholder="No Telp">
                        </div>
                        <h2>Persyaratan Lainnya </h2>
                        <div class="form-group">
                            <label for="donation-amount">Jenjang Pendidikan</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Jenjang Pendidikan</option>
                                <option value="1">REGULER</option>
                                <option value="2">DHUAFA</option>
                                <option value="3">TATIM / PIATU</option>
                            </select>
                        </div>
                        <div class="check">
                            <label>
                                <input type="checkbox" name="terms" required> Akte Kelahiran
                            </label>
                            <label>
                                <input type="checkbox" name="newsletter" required>Kartu Keluarga
                            </label>
                            <label>
                                <input type="checkbox" name="terms" required> Ijazah Terakhir
                            </label>
                            <label>
                                <input type="checkbox" name="newsletter" required>KTP Ortu / Wali
                            </label>
                            <label>
                                <input type="checkbox" name="newsletter" required>BPJS / KIP
                            </label>
                        </div>   
                    </div>
                    <div class="button">
                        <button type="submit">Kirim</button>
                    </div>
                    <!-- <button type="submit" id="submitBtn" style="">Submit</button> -->
            </form>

    </section>

  @endsection