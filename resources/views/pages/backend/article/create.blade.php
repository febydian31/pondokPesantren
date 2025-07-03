@extends('layouts.backend.app', ['title' => 'Tambah Artikel'])

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">Add Artikel</h1>
    </div>

    <!-- Content Row -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Tanggal</label>
                            <input type="date" name="date" class="form-control  @error('date') is-invalid @enderror" value="{{ old('date') }}">
                            @error('date') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Judul</label>
                            <input type="text" name="title" class="form-control  @error('title') is-invalid @enderror" value="{{ old('title') }}">
                            @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Content</label>
                            <textarea  id="konten" class="form-control @error('content') is-invalid @enderror" placeholder="kontent" name="content" style="height: 100px">{{ old('content') }}</textarea>
                                @error('content')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Gambar</label>
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}">
                            @error('image') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-between" style="margin-bottom:10px;">
                        <a href="/admin/article" class="button btn btn-info">Kembali</a>
                        <button class="btn btn-success" type="submit">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
