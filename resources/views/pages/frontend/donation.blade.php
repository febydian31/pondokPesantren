@extends('layouts.frontend.app', ['title' => 'Halaman Donasi'])

@section('content')
<section class="top">
    <div class="artikel">
        <div class="judul container">
            <h1>Donatur</h1>
            <p>Sumber Dana yang digunakan untuk pendanaan pengembangan dan kegiatan pondok pesantren Zuhriyah</p>
        </div>
    </div>
</section>

<section id="services" class="program sumber-dana services section">

    <div class="container section-title judul-artikel" data-aos="fade-up">
        <div><span>Sumber Dana</span></div>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card2">
                    <div class="icon"><i class="bi bi-building" title="People"></i></div>
                    <h3>Yayasan</h3>
                    <p>Donasi dari keluarga yasan PAPP Zuhriyah</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card2">
                    <div class="icon"><i class="bi bi-person-circle" title="People"></i></div>
                    <h3>Santri</h3>
                    <p>SPP dari santri regular tiap bulan dan usaha santri</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card2">
                    <div class="icon"><i class="bi bi-person-raised-hand" title="People"></i></div>
                    <h3>Donatur</h3>
                    <p>Donatur insidental baik dari CSR, para dermawan, maupun lembaga filantropi</p>
                </div>
            </div>

        </div>
    </div>

</section>
<!-- /sumber dana Section -->

<section class="container donatur">
    <div class="container row">
        <div class="form col-lg-6 col-md-6 mb-2">
            <div class="wrap mb-2">
                <div class="header-form-rek">
                    <div class="donasi">
                        @foreach (json_decode($profile->donations ?? '[]', true) as $item)
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-bank icon2 me-2"></i>
                            <span>{{ $item }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="wrap">
                <div class="header-form">
                    <div class="icon d-flex">
                        <h2>Donasi Kepada Pondok Pesantren Zuhriah</h2>
                    </div>
                    <p>Kontribusi Anda membantu kami menyediakan pendidikan Islam yang berkualitas kepada para Santri.
                    </p>
                </div>
                <form action="{{ route('frontend.donation.store') }}" method="POST">
                    @csrf
                    <div class="">
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                placeholder="Nama" placeholder="Nama Legkap">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">No Telp</label>
                            <input type="number" class="form-control @error('no_telp') is-invalid @enderror"
                                id="no_telp" name="no_telp" placeholder="No Telp">
                            @error('no_telp')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Nominal</label>
                            <input type="Number" class="form-control @error('nominal') is-invalid @enderror"
                                id="nominal" name="nominal" placeholder="Rp. ">
                            @error('nominal')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Pesan</label>
                            <textarea class="form-control @error('message') is-invalid @enderror" name="message" placeholder="Pesan"
                                style="height: 100px"></textarea>
                            @error('message')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <input type="hidden" name="category" value="external">

                    </div>
                    <div class="pendaftaran">
                        <button class="btn btn-primary" type="submit">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="form col-lg-6 col-md-6">
            <div class="wrap">
                <div class="header-form">
                    <h2>Data Donatur</h2>

                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Donatur</th>
                                <!-- <th scope="col">Tanggal</th> -->
                                <th scope="col">Nominal</th>
                                <th scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($donation as $donation)
                            <tr>
                                <td>{{ $donation->name }}</td>
                                <td>{{ 'Rp ' . number_format($donation->nominal, 0, ',', '.') }}</td>
                                <td>{!! \Illuminate\Support\Str::limit($donation->message, 200) !!}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection