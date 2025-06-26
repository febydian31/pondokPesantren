@extends('layouts.frontend.app', ['title' => 'Halaman Prestasi'])

@section('content')
    <section id="services" class="programs services section">
        <a href="" method="GET"></a>
        {{-- @if ($allPrestasi->isEmpty()) --}}
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="judul ">
                <h1>Prestasi Pesantren</h1>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
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
        {{-- @else
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="judul ">
                <h1>Daftar Prestasi</h1>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Nama Prestasi</th>
                            <th scope="col">Tingkat</th>
                            <th scope="col">Penyelenggara</th>
                            <th scope="col">Peraih</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allPrestasi as $key => $r)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $r->tahun }}</td>
                                <td>{{ $r->prestasi }}</td>
                                <td>{{ $r->tingkat }}</td>
                                <td>{{ $r->penyelenggara }}</td>
                                <td>{{ $r->peraih }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
        @endif --}}
    </section>
@endsection
