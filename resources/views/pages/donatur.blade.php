<x-navbar></x-navbar>

    <section class="top">
        <div class="artikel">
            <div class="judul container">
                <h1>Donatur</h1>
                <p>Sumber Dana yang digunakan untuk pendanaan pengembangan dan kegiatan pondok pesantren Zuhriyah</p>
            </div>
        </div>
    </section>

    <!-- sumber dana Section -->
    <section id="services" class="program sumber-dana services section">

      <!-- Section Title -->
      <div class="container section-title judul-artikel" data-aos="fade-up">
        <div><span>Sumber Dana</span></div>
      </div>
      <!-- End Section Title -->

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
                            <i class="bi bi-heart"></i>
                            <h2>Donasi Kepada Pondok Pesantren Zuhriah</h2>
                        </div>
                        <p>Kontribusi Anda membantu kami menyediakan pendidikan Islam yang berkualitas kepada para Santri.</p>
                    </div>
                    <form>
                        <div class="row">
                            <div class="form-group col-md-6">
                            <label for="inputPassword4">Nama *</label>
                            <input type="text" class="form-control" id="" placeholder="Nama Legkap">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputEmail4">Email *</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">No Telp *</label>
                            <input type="number" class="form-control" id="inputAddress" placeholder="No Telp">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Nominal *</label>
                            <input type="Number" class="form-control" id="inputAddress2" placeholder="Rp. ">
                        </div>
                        <div class="form-group">
                            <label for="donation-amount">Metode Pembayaran *</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Bank Transfer</option>
                                <option value="1">Credit Card</option>
                                <option value="2">E-Wallet</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="donation-amount">Pesan</label>
                            <textarea class="form-control" placeholder="Pesan" id="floatingTextarea2" style="height: 100px"></textarea>
                        </div>
                        
                        <button type="submit" onclick="openWhatsApp()" class="donasi btn">Donasi</button>
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
                <th scope="col">Tanggal</th>
                <th scope="col">Nominal</th>
                <th scope="col">Keterangan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Hamba Allah</td>
                <td>20 maret 2013</td>
                <td>200.000</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, alias? Tenetur velit illo ipsum provident maiores! Laborum iusto natus nobis.</td>
              </tr>
              <tr>
                <td>Hamba Allah</td>
                <td>20 maret 2013</td>
                <td>200.000</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, alias? Tenetur velit illo ipsum provident maiores! Laborum iusto natus nobis.</td>
              </tr>
              <tr>
                <td>Hamba Allah</td>
                <td>20 maret 2013</td>
                <td>200.000</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, alias? Tenetur velit illo ipsum provident maiores! Laborum iusto natus nobis.</td>
              </tr>
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

<x-footer></x-footer>