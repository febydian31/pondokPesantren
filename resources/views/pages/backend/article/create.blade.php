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
                    <input id="x" type="hidden" name="content" class="form-control @error('content') is-invalid @enderror" value="{{ old('content') }}">
                    <trix-editor input="x" ></trix-editor>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
                    <img class="mb-3" id="preview" src="#" alt="Preview Gambar" style="max-width: 550px; margin-top: 10px; display: none;">
                    <input type="file" name="image" id="image"
                        class="form-control @error('image') is-invalid @enderror" accept="image/*"
                        onchange="previewImage(event)">
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

    <!-- @push('addon-script')
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
    @endpush -->
@endsection
