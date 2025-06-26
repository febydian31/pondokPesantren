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
        <div class="container row ">
            <div class="form col-lg-6 col-md-6">
                <div class="wrap">
                    <div class="header-form">
                        <div class="icon d-flex">
                            <h2>Donasi Kepada Pondok Pesantren Zuhriah</h2>
                        </div>
                        <p>Kontribusi Anda membantu kami menyediakan pendidikan Islam yang berkualitas kepada para Santri.
                        </p>
                    </div>
                    <form action="" method="POST">
                        @csrf
                        <div class="">
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" id="nama"
                                    placeholder="Nama Legkap" required>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="">No Telp</label>
                                <input type="number" class="form-control" id="noTelp" name="noTelp"
                                    placeholder="No Telp" required>
                            </div>
                            <div class="form-group">
                                <label for="">Nominal</label>
                                <input type="Number" class="form-control" id="nominal" name="nominal" placeholder="Rp. "
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="">Pesan</label>
                                <textarea class="form-control" name="pesan" placeholder="Pesan" style="height: 100px" required></textarea>
                            </div>
                        </div>
                        <div class="pendaftaran">
                            <button class="btn btn-primary" type="submit">Kirim</button>
                        </div>
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
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Nominal</th>
                                    <th scope="col">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                        <!-- <nav aria-label="Page navigation example">
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
                                                                                  </nav> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
