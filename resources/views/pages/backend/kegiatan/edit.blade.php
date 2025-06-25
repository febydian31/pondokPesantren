@extends('layouts.admin.app')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Data</h1>
                    </div>
                    @if ($errors->any())
                        <div style="color:red;">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card shadow mb-4"  style="max-width: 750px; margin: 30px auto;">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <form action="{{ route('kegiatan.update', $kegiatan->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="">
                                        <div class="form-group col-md-12">
                                            <label for="">Hari</label>
                                            <input type="text" class="form-control" name="hari" value="{{ old('hari', $kegiatan->hari) }}" required>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="">Waktu</label>
                                            <input type="text" class="form-control" name="waktu" value="{{ $kegiatan->waktu }}" required>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="">Kegiatan</label>
                                            <input type="text" class="form-control" name="kegiatan" value="{{ $kegiatan->kegiatan }}" required>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="">Pembimbing</label>
                                            <input type="text" class="form-control" name="pembimbing" value="{{ $kegiatan->pembimbing }}" required>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="">Lokasi</label>
                                            <input type="text" class="form-control" name="lokasi" value="{{ $kegiatan->lokasi }}" required>
                                        </div>  
                                </div>
                                
                                <div class="d-grid gap-2 d-md-flex justify-content-md-between" style="margin-bottom:10px; ">
                                            <a href="/kegiatan" class="button btn btn-info">Kembali</a>
                                            <button class="btn btn-primary" type="submit">Update</button>
                                        </div>
                            </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

 @endsection