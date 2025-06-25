@extends('layouts.admin.app')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Data</h1>
                    </div>

                    <div class="card shadow mb-4"  style="max-width: 750px; margin: 30px auto;">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <form action="{{ route('artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="">
                                        <div class="form-group col-md-12">
                                            <label for="">Tanggal</label>
                                            <input type="date" class="form-control" name="tanggal" value="{{ $artikel->tanggal }}" required>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="">Judul</label>
                                            <input type="text" class="form-control" name="judul" value="{{ $artikel->judul }}" required>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="">Content</label>
                                            <input type="text" class="form-control" name="content" value="{{ $artikel->content }}" required>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="">Gambar</label>
                                            <input type="file" class="form-control" name="gambar" value="{{ $artikel->gambar }}" required>
                                        </div>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-between" style="margin-bottom:10px; ">
                                            <a href="/artikel" class="button btn btn-info">Kembali</a>
                                            <button class="btn btn-primary" type="submit">Update</button>
                                        </div>
                            </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

 @endsection