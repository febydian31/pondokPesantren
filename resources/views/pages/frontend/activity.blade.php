@extends('layouts.frontend.app', ['title' => 'Halaman Kegiatan'])

@section('content')
    <section id="services" class="programs services section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="judul">
                <h1>Kegiatan Pesantren</h1>
            </div>

            @if ($activities->isEmpty())
                <div class="table-responsive mt-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Hari</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Kegiatan</th>
                                <th scope="col">Pembimbing</th>
                                <th scope="col">Lokasi</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <h5>Kegiatan Belum Tersedia</h5>
                </div>
            @else
                <div class="table-responsive mt-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Hari</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Kegiatan</th>
                                <th scope="col">Pembimbing</th>
                                <th scope="col">Lokasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($activities as $activity)
                                <tr>
                                    <td>{{ $activity->day }}</td>
                                    <td>{{ \Carbon\Carbon::parse($activity->time)->format('H:i') }} WIB</td>
                                    <td>{{ $activity->activity }}</td>
                                    <td>{{ $activity->mentor }}</td>
                                    <td>{{ $activity->location }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </section>
@endsection
