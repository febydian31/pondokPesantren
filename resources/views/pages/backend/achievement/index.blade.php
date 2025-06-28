@extends('layouts.backend.app', ['title' => 'Dashboard Prestasi'])

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">List Prestasi</h1>
        <a class="btn btn-success" href="{{ route('achievement.create') }}" method="GET">
            <i class="fas fa-plus"></i> Tambah
        </a>
    </div>

    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="flash-alert">
        {{ session('success') }}
    </div>
    @endif


    <!-- Content Row -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Prestasi</th>
                            <th>Tingkat</th>
                            <th>Penyelenggara</th>
                            <th>Peraih</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Achievements as $achievement)
                            <tr>
                                <td>{{ $achievement->date }}</td>
                                <td>{{ $achievement->achievement }}</td>
                                <td>{{ $achievement->level }}</td>
                                <td>{{ $achievement->organizer }}</td>
                                <td>{{ $achievement->winner }}</td>
                                <td>
                                    <a href="{{ route('achievement.edit', $achievement) }}" class="btn btn-sm btn-warning mb-1">Edit</a>
                                    <form action="{{ route('achievement.destroy', $achievement) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus Data Prestasi ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger mb-1">Delete</button>
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
