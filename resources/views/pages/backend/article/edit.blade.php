@extends('layouts.backend.app', ['title' => 'Edit Artikel'])

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">Edit Artikel</h1>
    </div>

    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <form action="{{ route('article.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Judul</label>
                            <input type="text" name="title" class="form-control @error('text') is-invalid @enderror" value="{{ old('title', $article->title) }}" required>
                            @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label>Content</label>
                            <input id="x" type="hidden" name="content" class="form-control @error('content') is-invalid @enderror" value="{{ old('content', $article->content) }}">
                            <trix-editor input="x"></trix-editor>
                            @error('content') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group col-md-12">
                        <label for="image">Gambar</label>
                        {{-- Tampilkan gambar lama jika ada --}}
                        @if ($article->image)
                            <img id="preview" src="{{ asset('storage/' . $article->image) }}" 
                                alt="Gambar Sebelumnya" 
                                style="max-width: 550px; margin-bottom: 10px; display: block;">
                        @else
                            <img id="preview" src="#" 
                                alt="Preview Gambar" 
                                style="max-width: 550px; margin-bottom: 10px; display: none;">
                        @endif

                        {{-- Input file untuk upload gambar baru --}}
                        <input type="file" name="image" id="image"
                            class="form-control @error('image') is-invalid @enderror"
                            accept="image/*" onchange="previewImage(event)">
                        
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-between" style="margin-bottom:10px;">
                        <a href="/admin/article" class="button btn btn-info">Kembali</a>
                        <button class="btn btn-success" type="submit">Edit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
