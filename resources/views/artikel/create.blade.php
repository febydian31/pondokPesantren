@extends('layouts.dashboardAdmin')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Data Artikel</h1>
                    </div>

                    <div class="card shadow mb-4"  style="max-width: 750px; margin: 30px auto;">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <form action="{{ route('artikel.store') }}" method="POST"  enctype="multipart/form-data">
                                        @csrf

                                        <div class="">
                                                <div class="form-group col-md-12">
                                                    <label for="">Tanggal</label>
                                                    <input type="date" class="form-control" name="tanggal" required>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="">Judul</label>
                                                    <input type="text" class="form-control" name="judul" id="judul" required>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="content">Content</label>
                                                    <textarea name="content" class="form-control" id="content" rows="5" required></textarea>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="gambar">Gambar</label>
                                                    <input type="file" class="form-control" name="gambar" id="gambar" required>
                                                </div>
                                        </div>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-between" style="margin-bottom:10px; ">
                                            <a href="/artikel" class="button btn btn-info">Kembali</a>
                                            <button class="btn btn-primary" type="submit">Kirim</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

 @endsection