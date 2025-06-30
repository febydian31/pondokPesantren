@extends('layouts.backend.app', ['title' => 'Dashboard Santri'])

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">List Santri</h1>
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
                            <th>No</th>
                            <th>Nama</th>
                            <th>No Induk</th>
                            <th>NISN</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Nama Ayah</th>
                            <th>Nama Ibu</th>
                            <th>Alamat Ayah</th>
                            <th>Alamat Ibu</th>
                            <th>Pekerjaan Ayah</th>
                            <th>Pekerjaan Ibu</th>
                            <th>No Telp</th>
                            <th>Jenjang Pendidikan</th>
                            <th>Kategori Santri</th>
                            <th>Berkas</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($registration as $key => $r)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$r->name}}</td>
                                <td>{{$r->no_induk}}</td>
                                <td>{{$r->NISN}}</td>
                                <td>{{$r->birth}}</td>
                                <td>{{$r->gender}}</td>
                                <td>{{$r->address}}</td>
                                <td>{{$r->father_name}}</td>
                                <td>{{$r->mother_name}}</td>
                                <td>{{$r->father_address}}</td>
                                <td>{{$r->mother_address}}</td>
                                <td>{{$r->father_job}}</td>
                                <td>{{$r->mother_job}}</td>
                                <td>{{$r->no_telp}}</td>
                                <td>{{$r->education_level}}</td>
                                <td>{{$r->student_category}}</td>
                                <td>{{$r->file_upload}}</td>
                                <td>
                                    <form action="{{ route('registration.destroy', $r->id) }}" method="POST">
                                        @csrf 
                                        @method('delete')
                                        <button id="delete" type="submit" class="button btn btn-danger" >Delete</button>
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
