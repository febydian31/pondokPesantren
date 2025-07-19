@extends('layouts.backend.app', ['title' => 'Dashboard Santri'])

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">List Santri</h1>
        <a class="btn btn-success" href="{{ route('admin.student.create') }}">
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
                            <th>Nama</th>
                            <th>No Induk</th>
                            <th>NISN</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Jenjang Pendidikan</th>
                            <th>Kategori Santri</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($registration as $key => $r)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $r->name }}</td>
                                <td>{{ $r->no_induk }}</td>
                                <td>{{ $r->nisn }}</td>
                                <td>{{ $r->birth }}</td>
                                <td>{{ $r->gender }}</td>
                                <td>{!! \Illuminate\Support\Str::limit($r->address, 100) !!}</td>
                                <td>{{ $r->education_level }}</td>
                                <td>{{ $r->student_category }}</td>

                                <td>
                                    <a href="{{ route('admin.student.edit', $r) }}"
                                        class="btn btn-sm btn-warning mb-1">Edit</a>
                                    <a href="{{ route('admin.student.show', $r) }}"
                                        class="btn btn-sm btn-info mb-1">Detail</a>
                                    <form action="{{ route('admin.student.destroy', $r) }}" method="POST"
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
