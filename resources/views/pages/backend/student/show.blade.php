@extends('layouts.backend.app', ['title' => 'Detail Santri'])

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">Detail Santri</h1>
</div>

<div class="container">
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                    <thead>
                    </thead>
                    <tbody>      
                        <tr>
                            <td width="120px">Nama </td>
                            <td width="5px"> : </td>
                            <td>{{$registration->name}}</td>
                        </tr>
                        <tr>
                            <td width="120px">No Induk </td>
                            <td width="5px"> : </td>
                        <td>{{$registration->no_induk}}</td>
                        </tr>
                        <tr>
                            <td width="120px">NISN </td>
                            <td width="5px"> : </td>
                            <td>{{$registration->nisn}}</td>
                        </tr>
                        <tr>
                            <td width="120px">Tanggal Lahir </td>
                            <td width="5px"> : </td>
                            <td>{{$registration->birth}}</td>
                        </tr>
                        <tr>
                            <td width="120px">Jenis Kelamin </td>
                            <td width="5px"> : </td>
                            <td>{{$registration->gender}}</td>
                        </tr>
                        <tr>
                            <td width="120px">Alamat </td>
                            <td width="5px"> : </td>
                            <td>{!! $registration->address !!}</td>
                        </tr>
                        <tr>
                            <td width="120px">Nama Ayah </td>
                            <td width="5px"> : </td>
                            <td>{{$registration->father_name}}</td>
                        </tr>
                        <tr>
                            <td width="120px">Nama Ibu </td>
                            <td width="5px"> : </td>
                            <td>{{$registration->mother_name}}</td>
                        </tr>
                        <tr>
                            <td width="120px">Alamat Ayah </td>
                            <td width="5px"> : </td>
                            <td>{!! $registration->father_address !!}</td>
                        </tr>
                        <tr>
                            <td width="120px">Alamat Ibu </td>
                            <td width="5px"> : </td>
                            <td>{!! $registration->mother_address !!}</td>
                        </tr>
                        <tr>
                            <td width="120px">Pekerjaan Ayah </td>
                            <td width="5px"> : </td>
                            <td>{{$registration->father_job}}</td>
                        </tr>
                        <tr>
                            <td width="120px">Pekerjaan Ibu </td>
                            <td width="5px"> : </td>
                            <td>{{$registration->mother_job}}</td>
                        </tr>
                        <tr>
                            <td width="120px">No Telp </td>
                            <td width="5px"> : </td>
                            <td>{{$registration->no_telp}}</td>
                        </tr>
                        <tr>
                            <td width="120px">Jenjang Pendidikan </td>
                            <td width="5px"> : </td>
                            <td>{{$registration->education_level}}</td>
                        </tr>
                        <tr>
                            <td width="120px">Kategori Santri </td>
                            <td width="5px"> : </td>
                            <td>{{$registration->student_category}}</td>
                        </tr>
                        
                    </tbody>
                </table>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start" style="margin-bottom:10px; ">
                    <a href="{{ route('student.index') }}" class="button btn btn-info">Back</a>
                </div>
            </div>
        </div>
        </div>
    </div>
    
</div>
@endsection
