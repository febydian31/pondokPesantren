@extends('layouts.backend.app', ['title' => 'Dashboard Donasi'])

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">List Donasi</h1>
        <a class="btn btn-success" href="{{ route('donation.create') }}" method="GET">
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
                            <th>No Telp</th>
                            <th>Nominal</th>
                            <th>Kategori</th>
                            <th>Pesan</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($donation as $key => $donation)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{ $donation->name }}</td>
                                <td>{{ $donation->no_telp }}</td>
                                <td>{{ 'Rp ' . number_format($donation->nominal, 0, ',', '.') }}</td>
                                <td>{{ $donation->category }}</td>
                                <td>{!! $donation->message !!}</td>
                                <td>
                                    <a href="{{ route('donation.edit', $donation) }}" class="btn btn-sm btn-warning mb-1">Edit</a>
                                    <form action="{{ route('donation.destroy', $donation) }}" method="POST" class="d-inline form-hapus">
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
