@extends('layouts.backend.app', ['title' => 'Dashboard Beranda'])

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Beranda</h1>

    <!-- Content Row -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 g-4">
        {{-- Santri --}}
        <div class="col mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Santri</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                        </div>
                        <i class="fas fa-male fa-2x text-gray-400"></i>
                    </div>
                </div>
            </div>
        </div>

        {{-- Santriwati --}}
        <div class="col mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Santriwati</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                        </div>
                        <i class="fas fa-female fa-2x text-gray-400"></i>
                    </div>
                </div>
            </div>
        </div>

        {{-- Artikel --}}
        <div class="col mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Artikel</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                        </div>
                        <i class="fas fa-newspaper fa-2x text-gray-400"></i>
                    </div>
                </div>
            </div>
        </div>

        {{-- Prestasi --}}
        <div class="col mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Prestasi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                        </div>
                        <i class="fas fa-trophy fa-2x text-gray-400"></i>
                    </div>
                </div>
            </div>
        </div>

        {{-- Kegiatan --}}
        <div class="col mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Kegiatan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                        </div>
                        <i class="fas fa-calendar-alt fa-2x text-gray-400"></i>
                    </div>
                </div>
            </div>
        </div>

        {{-- Donasi --}}
        <div class="col mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Donasi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                        </div>
                        <i class="fas fa-hand-holding-usd fa-2x text-gray-400"></i>
                    </div>
                </div>
            </div>
        </div>

        {{-- Total Donasi Bulan --}}
        <div class="col mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                Total Donasi Bulan
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                        </div>
                        <i class="fas fa-coins fa-2x text-gray-400"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
