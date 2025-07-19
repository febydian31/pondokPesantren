@extends('layouts.backend.app', ['title' => 'Tambah Donasi'])

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">Add Donasi</h1>
    </div>

    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <form action="{{ route('admin.donation.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>No Telp</label>
                            <input type="number" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror"
                                value="{{ old('no_telp') }}">
                            @error('no_telp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nominal</label>
                            <input type="number" name="nominal" class="form-control @error('nominal') is-invalid @enderror"
                                value="{{ old('nominal') }}">
                            @error('nominal')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Kategori</label>
                            <select name="category">
                                <option value="internal">Internal</option>
                                <option value="external">External</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Pesan</label>
                            <input id="x" type="hidden" name="message"
                                class="form-control @error('message') is-invalid @enderror" value="{{ old('message') }}">
                            <trix-editor input="x"></trix-editor>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-between" style="margin-bottom:10px;">
                        <a href="/admin/donation" class="button btn btn-info">Kembali</a>
                        <button class="btn btn-success" type="submit">Tambah</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
