@extends('layouts.dashboardAdmin')
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
                                    <form action="{{ route('donasi.store') }}" method="POST">
                                    @csrf

                                        <div class="">
                                            <div class="row">
                                            <div class="form-group col-md-6">
                                            <label for="">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Legkap" required >
                                            </div>
                                            <div class="form-group col-md-6">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">No Telp</label>
                                            <input type="number" class="form-control" id="noTelp" name="noTelp" placeholder="No Telp" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nominal</label>
                                            <input type="Number" class="form-control" id="nominal" name="nominal" placeholder="Rp. " required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Metode Pembayaran</label>
                                            <select class="form-select" name="metodePembayaran" aria-label="Default select example" required>
                                                @foreach($metode as $met)
                                                    <option value="{{ $met }}" {{ old('metodePembayaran') == $met ? 'selected' : '' }}>
                                                        {{ $met }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Pesan</label>
                                            <textarea class="form-control" name="pesan" placeholder="Pesan" style="height: 100px" required></textarea>
                                        </div> 
                                    </form>
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