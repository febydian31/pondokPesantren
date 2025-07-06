@extends('layouts.backend.app', ['title' => 'Tambah Artikel'])

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">Tambah Artikel</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal</label>
                    <input type="text" name="date" id="date"
                        class="form-control @error('date') is-invalid @enderror" value="{{ old('date') }}"
                        placeholder="Pilih tanggal">
                    @error('date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" name="title" id="title"
                        class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}"
                        placeholder="Contoh: Kegiatan Pondok">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Konten</label>
                    <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror"
                        placeholder="Tulis konten artikel di sini" rows="5">{{ old('content') }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
                    <img class="img-preview img-fluid mb-3 col-md-12" style="display:none">
                    <input type="file" name="image" id="image"
                        class="form-control @error('image') is-invalid @enderror">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('article.index') }}" class="btn btn-info">Kembali</a>
                    <button type="submit" class="btn btn-success">Tambah</button>
                </div>
            </form>
        </div>
    </div>

    @push('addon-script')
        <script>
            function imagePreview() {
                const image = document.querySelector('#image');
                const imagePreview = document.querySelector('.img-preview');

                imagePreview.style.display = 'block';

                const oFReader = new FileReader();
                oFReader.readAsDataURL(image.files[0]);

                oFReader.onload = function(oFREvent) {
                    imagePreview.src = oFREvent.target.result
                }
            }
        </script>
    @endpush
@endsection
