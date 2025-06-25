@extends('layouts.admin.app')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Data</h1>
                    </div>

                    <div class="card shadow mb-4" style="max-width: 750px; margin: 30px auto;">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <form action="{{ route('prestasi.update', $prestasi->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="">
                                        <div class="form-group col-md-12">
                                            <label for="">Tahun</label>
                                            <input type="number" class="form-control" name="tahun" value="{{ $prestasi->tahun }}" required>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="">Prestasi</label>
                                            <input type="text" class="form-control" name="prestasi" value="{{ $prestasi->prestasi }}" required>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="">Tingkat</label>
                                            <input type="text" class="form-control" name="tingkat" value="{{ $prestasi->tingkat }}" required>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="">Penyelenggara</label>
                                            <input type="text" class="form-control" name="penyelenggara" value="{{ $prestasi->penyelenggara }}" required>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="">Peraih</label>
                                            <input type="text" class="form-control" name="peraih" value="{{ $prestasi->peraih }}" required>
                                        </div>   
                                </div>
                                
                                <div class="d-grid gap-2 d-md-flex justify-content-md-between" style="margin-bottom:10px; ">
                                            <a href="/prestasi" class="button btn btn-info">Kembali</a>
                                            <button class="btn btn-primary" type="submit">Update</button>
                                        </div>
                            </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

 @endsection