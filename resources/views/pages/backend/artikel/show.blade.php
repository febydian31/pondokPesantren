@extends('layouts.admin.app')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Artikel</h1>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                    <thead>
                                    </thead>
                                    <tbody>      
                                        <tr>
                                            <td width="120px">Tanggal </td>
                                            <td width="5px"> : </td>
                                            <td>{{$artikel->tanggal}}</td>
                                        </tr>
                                        <tr>
                                            <td width="120px">Judul </td>
                                            <td width="5px"> : </td>
                                        <td>{{$artikel->judul}}</td>
                                        </tr>
                                        <tr>
                                            <td width="120px">Content </td>
                                            <td width="5px"> : </td>
                                            <td>{{$artikel->content}}</td>
                                        </tr>
                                        <tr>
                                            <td width="120px">Gambar </td>
                                            <td width="5px"> : </td>
                                            <td><img src="{{ asset('storage/' . $artikel->gambar) }}" width="40%" alt=""></td>
                                        </tr>

                                    </tbody>
                                </table>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-start" style="margin-bottom:10px; ">
                                   <a href="/artikel" class="button btn btn-info">Kembali</a>
                               </div>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

 @endsection