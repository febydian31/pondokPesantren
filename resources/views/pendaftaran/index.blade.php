@extends('layouts.dashboardAdmin')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Pendaftaran</h1>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="dataTable_length">
                                            <!-- <label>Show  entries</label> -->
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="dataTable_filter" class="dataTables_filter">
                                            </div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                    <thead>
                                        <!-- <tr role="row"><th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 131.2px;">Name</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 205.2px;">Position</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 92.2px;">Office</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 37.2px;">Age</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 86.2px;">Start date</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 76.2px;">Salary</th></tr> -->
                                         <a href="{{ route('pendaftaran.create') }}" method="GET" class="btn btn-primary btn-icon-split" style="margin-bottom: 10px;">
                                            <span class="text" >Tambah</span>
                                        </a>
                                    </thead>
                                    <div>
                                        <tr>
                                            <th rowspan="1" colspan="1">No</th>
                                            <th rowspan="1" colspan="1">Nama</th>
                                            <th rowspan="1" colspan="1">No Induk</th>
                                            <th rowspan="1" colspan="1">NISN</th>
                                            <th rowspan="1" colspan="1">Tanggal Lahir</th>
                                            <th rowspan="1" colspan="1">Jenis Kelamin</th>
                                            <th rowspan="1" colspan="1">Alamat</th>
                                            <th rowspan="1" colspan="1">Nama Ayah</th>
                                            <th rowspan="1" colspan="1">Nama Ibu</th>
                                            <th rowspan="1" colspan="1">Pekerjaan Ayah</th>
                                            <th rowspan="1" colspan="1">Pekerjaan Ibu</th>
                                            <th rowspan="1" colspan="1">Alamat Ayah</th>
                                            <th rowspan="1" colspan="1">Alamat Ibu</th>
                                            <th rowspan="1" colspan="1">No Telpn</th>
                                            <th rowspan="1" colspan="1">Jenjang Pendidikan</th>
                                            <th rowspan="1" colspan="1">Akte Kelahiran</th>
                                            <!-- <th rowspan="1" colspan="1">Kartu Keluarga</th>
                                            <th rowspan="1" colspan="1">Ijazah Terakhir</th>
                                            <th rowspan="1" colspan="1">KTP Ortu / Wali</th>
                                            <th rowspan="1" colspan="1">BPJS / KIP</th> -->
                                        </tr>
                                    </div>
                                    <tbody>      
                                        @foreach ($allpendaftaran as $key => $r)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$r->nama}}</td>
                                            <td>{{$r->no_induk}}</td>
                                            <td>{{$r->NISN}}</td>
                                            <td>{{$r->tanggal_lahir}}</td>
                                            <td>{{$r->jenis_kelamin}}</td>
                                            <td>{{$r->alamat}}</td>
                                            <td>{{$r->nama_ayah}}</td>
                                            <td>{{$r->nama_ibu}}</td>
                                            <td>{{$r->pekerjaan_ayah}}</td>
                                            <td>{{$r->pekerjaan_ibu}}</td>
                                            <td>{{$r->alamat_ayah}}</td>
                                            <td>{{$r->alamat_ibu}}</td>
                                            <td>{{$r->no_telp}}</td>
                                            <td>{{$r->jenjang_pendidikan}}</td>
                                            <td>{{$r->kategori_santri}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

 @endsection