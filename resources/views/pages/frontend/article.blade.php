@extends('layouts.frontend.app', ['title' => 'Halaman Artikel'])

@section('content')
    <section id="services" class="services programs section">
        @if ($articles->isEmpty())
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="judul">
                    <h1>Artikel</h1>
                </div>
                <div class="text-center py-5">
                    <h4>Artikel Belum Tersedia</h4>
                    <p class="text-muted">Mohon tunggu, artikel akan segera hadir.</p>
                </div>
            </div>
        @else
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="judul">
                    <h1>Artikel</h1>
                </div>
                <div class="row gy-4">
                    @foreach ($articles as $key => $r)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <a href="{{ route('detail.article', $r->slug) }}">
                                <div class="service-card">
                                    <img class="gambar" src="{{ asset('storage/' . $r->image) }}" alt="">
                                    <span class="span text-black">
                                        {{ \Carbon\Carbon::parse($r->date)->translatedFormat('d F Y') }}
                                    </span>
                                    <h3>{{ $r->title }}</h3>
                                    <td class="text-black">
                                        {!! \Illuminate\Support\Str::words(strip_tags($r->content), 25, '...') !!}
                                    </td>
                                    <a href="{{ route('detail.article', $r->slug) }}" class="read-more">Selengkapnya</a>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

                {{-- Custom Pagination Inline --}}
                @if ($articles->hasPages())
                    <nav aria-label="Page navigation example" class="mt-5">
                        <ul class="pagination justify-content-center">
                            {{-- Previous Page Link --}}
                            @if ($articles->onFirstPage())
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $articles->previousPageUrl() }}"
                                        tabindex="-1">Previous</a>
                                </li>
                            @endif

                            {{-- Page Numbers --}}
                            @php
                                $start = max($articles->currentPage() - 2, 1);
                                $end = min($start + 4, $articles->lastPage());
                                $start = max($end - 4, 1);
                            @endphp

                            @if ($start > 1)
                                <li class="page-item">
                                    <a class="page-link" href="{{ $articles->url(1) }}">1</a>
                                </li>
                                @if ($start > 2)
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#">...</a>
                                    </li>
                                @endif
                            @endif

                            @for ($i = $start; $i <= $end; $i++)
                                @if ($i == $articles->currentPage())
                                    <li class="page-item active">
                                        <a class="page-link" href="#">{{ $i }}</a>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $articles->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endif
                            @endfor

                            @if ($end < $articles->lastPage())
                                @if ($end < $articles->lastPage() - 1)
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#">...</a>
                                    </li>
                                @endif
                                <li class="page-item">
                                    <a class="page-link"
                                        href="{{ $articles->url($articles->lastPage()) }}">{{ $articles->lastPage() }}</a>
                                </li>
                            @endif

                            {{-- Next Page Link --}}
                            @if ($articles->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $articles->nextPageUrl() }}">Next</a>
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
