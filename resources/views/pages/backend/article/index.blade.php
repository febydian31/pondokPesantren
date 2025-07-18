@extends('layouts.backend.app', ['title' => 'Dashboard Artikel'])

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">List Artikel</h1>
        <a class="btn btn-success" href="{{ route('admin.article.create') }}" method="GET" enctype="multipart/form-data">
            <i class="fas fa-plus"></i> Tambah
        </a>
    </div>

    <!-- Content Row -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Judul</th>
                            <th>Content</th>
                            <th>Gambar</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $key => $article)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ \Carbon\Carbon::parse($article->date)->translatedFormat('d F Y') }}</td>
                                <td>{{ $article->title }}</td>
                                <td>{!! \Illuminate\Support\Str::words(strip_tags($article->content), 30, '...') !!}</td>
                                <td><img src="{{ asset('storage/' . $article->image) }}" alt="Article Image" width="100">
                                </td>
                                <td>
                                    <a href="{{ route('admin.article.edit', $article) }}"
                                        class="btn btn-sm btn-warning mb-1">Edit</a>
                                    <a href="{{ route('admin.article.show', $article) }}"
                                        class="btn btn-sm btn-info mb-1">Detail</a>
                                    <form action="{{ route('admin.article.destroy', $article) }}" method="POST"
                                        class="d-inline form-hapus">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger mb-1">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
