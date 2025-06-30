@extends('layouts.backend.app', ['title' => 'Dashboard Donasi'])

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">List Donasi</h1>
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
                            <th>Nama</th>
                            <th>No Telp</th>
                            <th>Nominal</th>
                            <th>Pesan</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($donation as $donation)
                            <tr>
                                <td>{{ $donation->name }}</td>
                                <td>{{ $donation->no_telp }}</td>
                                <td>{{ $donation->nominal }}</td>
                                <td>{{ $donation->message }}</td>
                                <td>
                                    <form action="{{ route('donation.destroy', $donation) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus Data Donasi ?')">
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
