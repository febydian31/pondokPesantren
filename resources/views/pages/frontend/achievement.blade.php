@extends('layouts.frontend.app', ['title' => 'Halaman Prestasi'])

@section('content')
    <section id="services" class="programs services section">
        <a href="" method="GET"></a>
        {{-- @if ($allPrestasi->isEmpty()) --}}
        @if ($achievements->isEmpty())
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="judul ">
                    <h1>Prestasi Pesantren</h1>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Tahun</th>
                                <th scope="col">Nama Prestasi</th>
                                <th scope="col">Tingkat</th>
                                <th scope="col">Penyelenggara</th>
                                <th scope="col">Peraih</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <h5>Prestasi Belum Tersedia</h5>
                </div>
            </div>
        @else
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="judul ">
                    <h1>Daftar Prestasi</h1>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Nama Prestasi</th>
                                <th scope="col">Tingkat</th>
                                <th scope="col">Penyelenggara</th>
                                <th scope="col">Peraih</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($achievements as $achievement)
                                <tr>
                                    <td>{{ \Carbon\Carbon::parse($achievement->date)->translatedFormat('d F Y') }}</td>
                                    <td>{{ $achievement->achievement }}</td>
                                    <td>{{ $achievement->level }}</td>
                                    <td>{{ $achievement->organizer }}</td>
                                    <td>{{ $achievement->winner }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- Custom Pagination Inline --}}
            @if ($achievements->hasPages())
                <nav aria-label="Page navigation example" class="mt-5">
                    <ul class="pagination justify-content-center">
                        {{-- Previous Page Link --}}
                        @if ($achievements->onFirstPage())
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $achievements->previousPageUrl() }}"
                                    tabindex="-1">Previous</a>
                            </li>
                        @endif

                        {{-- Page Numbers --}}
                        @php
                            $start = max($achievements->currentPage() - 2, 1);
                            $end = min($start + 4, $achievements->lastPage());
                            $start = max($end - 4, 1);
                        @endphp

                        @if ($start > 1)
                            <li class="page-item">
                                <a class="page-link" href="{{ $achievements->url(1) }}">1</a>
                            </li>
                            @if ($start > 2)
                                <li class="page-item disabled">
                                    <a class="page-link" href="#">...</a>
                                </li>
                            @endif
                        @endif

                        @for ($i = $start; $i <= $end; $i++)
                            @if ($i == $achievements->currentPage())
                                <li class="page-item active">
                                    <a class="page-link" href="#">{{ $i }}</a>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $achievements->url($i) }}">{{ $i }}</a>
                                </li>
                            @endif
                        @endfor

                        @if ($end < $achievements->lastPage())
                            @if ($end < $achievements->lastPage() - 1)
                                <li class="page-item disabled">
                                    <a class="page-link" href="#">...</a>
                                </li>
                            @endif
                            <li class="page-item">
                                <a class="page-link"
                                    href="{{ $achievements->url($achievements->lastPage()) }}">{{ $achievements->lastPage() }}</a>
                            </li>
                        @endif

                        {{-- Next Page Link --}}
                        @if ($achievements->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $achievements->nextPageUrl() }}">Next</a>
                            </li>
                        @else
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-disabled="true">Next</a>
                            </li>
                        @endif
                    </ul>
                </nav>
            @endif
            </div>
        @endif
    </section>

    {{-- Custom CSS untuk styling pagination --}}
    <style>
        /* Pagination Styling */
        .pagination {
            margin-bottom: 0;
            gap: 0.25rem;
        }

        .pagination .page-link {
            color: #6c757d;
            background-color: #fff;
            border: 1px solid #dee2e6;
            padding: 0.5rem 0.75rem;
            border-radius: 0.375rem;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.15s ease-in-out;
            position: relative;
        }

        .pagination .page-link:hover {
            color: #0d6efd;
            background-color: #e9ecef;
            border-color: #adb5bd;
        }

        .pagination .page-item.active .page-link {
            color: #fff;
            background-color: #0d6efd;
            border-color: #0d6efd;
            z-index: 3;
        }

        .pagination .page-item.disabled .page-link {
            color: #6c757d;
            background-color: #fff;
            border-color: #dee2e6;
            pointer-events: none;
            cursor: default;
        }

        /* Responsive */
        @media (max-width: 576px) {
            .pagination {
                font-size: 0.875rem;
            }

            .pagination .page-link {
                padding: 0.375rem 0.5rem;
            }
        }
    </style>
@endsection
