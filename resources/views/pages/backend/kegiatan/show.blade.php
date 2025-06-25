@extends('layouts.admin.app')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Kegiatan</h1>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                    <thead>
                                        <!-- <tr role="row"><th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 131.2px;">Name</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 205.2px;">Position</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 92.2px;">Office</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 37.2px;">Age</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 86.2px;">Start date</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 76.2px;">Salary</th></tr> -->
                                         <a href="{{ route('kegiatan.create') }}" method="GET" >
                                            <!-- <span class="text">Tambah</span> -->
                                        </a>
                                    </thead>
                                    <tbody>      
                                        <tr>
                                            <td width="120px">Hari </td>
                                            <td width="5px"> : </td>
                                            <td>{{$kegiatan->hari}}</td>
                                        </tr>
                                        <tr>
                                            <td width="120px">Hari </td>
                                            <td width="5px"> : </td>
                                        <td>{{$kegiatan->waktu}}</td>
                                        </tr>
                                        <tr>
                                            <td width="120px">Hari </td>
                                            <td width="5px"> : </td>
                                            <td>{{$kegiatan->kegiatan}}</td>
                                        </tr>
                                        <tr>
                                            <td width="120px">Hari </td>
                                            <td width="5px"> : </td>
                                            <td>{{$kegiatan->pembimbing}}</td>
                                        </tr>
                                        <tr>
                                            <td width="120px">Hari </td>
                                            <td width="5px"> : </td>
                                            <td>{{$kegiatan->lokasi}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-start" style="margin-bottom:10px; ">
                                   <a href="/kegiatan" class="button btn btn-info">Kembali</a>
                               </div>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

 @endsection