@extends('layouts.dashboardAdmin')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid " >

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Data</h1>
                    </div>

                    <div class="card shadow mb-4" style="max-width: 750px; margin: 30px auto;">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Prestasi</h6>
                        </div>
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
                                                    <input type="number" class="form-control" name="noInduk" placeholder="noInduk">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="NISN">NISN</label>
                                                    <input type="number" class="form-control" name="NISN" placeholder="NISN">
                                                </div>
                                                <div class="form-group col-md-6">
                                                <label for="date">Tanggl Lahir</label>
                                                    <input type="date" class="form-control" name="tanggalLahir" placeholder="Tanggal Lahir">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="donation-amount">Jenis Kelamin</label>
                                                <select class="form-select" name="jenisKelamin" aria-label="Default select example">
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
                                            
                                            
                                            <div class="check">
                                                <!-- <label>
                                                    <input type="checkbox" name="akte" required> Akte Kelahiran
                                                </label>
                                                <label>
                                                    <input type="checkbox" name="kk" required>Kartu Keluarga
                                                </label>
                                                <label>
                                                    <input type="checkbox" name="ijazah" required> Ijazah Terakhir
                                                </label>
                                                <label>
                                                    <input type="checkbox" name="ktp" required>KTP Ortu / Wali
                                                </label>
                                                <label>
                                                    <input type="checkbox" name="bpjs" required>BPJS / KIP
                                                </label> -->
                                            </div>   
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