@extends('layouts.admin.app')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Data</h1>
                    </div>

                    <div class="card shadow mb-4"  style="max-width: 750px; margin: 30px auto;">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <form action="{{ route('kegiatan.store') }}" method="POST">
                                    @csrf

                                    <div class="">
                                        <div class="form-group col-md-12">
                                            <label for="">Hari</label>
                                            <input type="text" class="form-control" name="hari" required>
                                            
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="">Waktu</label>
                                            <input type="text" class="form-control" name="waktu" required>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="">Kegiatan</label>
                                            <input type="text" class="form-control" name="kegiatan" required>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="">Pembimbing</label>
                                            <input type="text" class="form-control" name="pembimbing" required>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="">Lokasi</label>
                                            <input type="text" class="form-control" name="lokasi" required>
                                        </div>  
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-between" style="margin-bottom:10px; ">
                                    <a href="/kegiatan" class="button btn btn-info">Kembali</a>
                                    <button class="btn btn-primary" type="submit">Kirim</button>
                                </div>
                            </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

 @endsection