@extends('layouts.backend.app', ['title' => 'Detail Artikel'])

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">Detail Artikel</h1>
    </div>

    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0"
                            role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                            <thead>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="120px">Tanggal </td>
                                    <td width="5px"> : </td>
                                    <td>{{ $article->date }}</td>
                                </tr>
                                <tr>
                                    <td width="120px">Judul </td>
                                    <td width="5px"> : </td>
                                    <td>{{ $article->title }}</td>
                                </tr>
                                <tr>
                                    <td width="120px">Content </td>
                                    <td width="5px"> : </td>
                                    <td>{!! $article->content !!}</td>
                                </tr>
                                <tr>
                                    <td width="120px">Gambar </td>
                                    <td width="5px"> : </td>
                                    <td><img src="{{ asset('storage/' . $article->image) }}" alt="Article Image"
                                            width="200"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start" style="margin-bottom:10px; ">
                            <a href="{{ route('admin.article.index') }}" class="button btn btn-info">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
