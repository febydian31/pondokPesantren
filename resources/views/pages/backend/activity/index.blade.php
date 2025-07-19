@extends('layouts.backend.app', ['title' => 'Dashboard Kegiatan'])

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">List Kegiatan</h1>
        <a class="btn btn-success" href="{{ route('admin.activity.create') }}" method="GET">
            <i class="fas fa-plus"></i> Tambah
        </a>
    </div>

    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Hari</th>
                            <th>Waktu</th>
                            <th>Kegiatan</th>
                            <th>Pembimbing</th>
                            <th>Lokasi</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($activities as $key => $activity)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $activity->day }}</td>
                                <td>{{ \Carbon\Carbon::parse($activity->time)->format('H:i') }}</td>
                                <td>{{ $activity->activity }}</td>
                                <td>{{ $activity->mentor }}</td>
                                <td>{{ $activity->location }}</td>
                                <td>
                                    <a href="{{ route('admin.activity.edit', $activity) }}"
                                        class="btn btn-sm btn-warning mb-1">Edit</a>
                                    <form action="{{ route('admin.activity.destroy', $activity) }}" method="POST"
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
