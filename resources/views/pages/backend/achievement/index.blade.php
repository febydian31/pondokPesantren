@extends('layouts.backend.app', ['title' => 'Dashboard Prestasi'])

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">List Prestasi</h1>
        <a class="btn btn-success" href="{{ route('admin.achievement.create') }}" method="GET">
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
                            <th>Prestasi</th>
                            <th>Tingkat</th>
                            <th>Penyelenggara</th>
                            <th>Peraih</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Achievements as $key => $achievement)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ \Carbon\Carbon::parse($achievement->date)->translatedFormat('d F Y') }}</td>
                                <td>{{ $achievement->achievement }}</td>
                                <td>{{ $achievement->level }}</td>
                                <td>{{ $achievement->organizer }}</td>
                                <td>{{ $achievement->winner }}</td>
                                <td>
                                    <a href="{{ route('admin.achievement.edit', $achievement) }}"
                                        class="btn btn-sm btn-warning mb-1">Edit</a>
                                    <form action="{{ route('admin.achievement.destroy', $achievement) }}" method="POST"
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
