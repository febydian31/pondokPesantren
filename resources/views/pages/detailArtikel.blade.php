@extends('layouts.main')
@section('content')

<section class="top-detail">
    <div class="detail-judul">
        <div class="judul container">
            <h1>Detail Artikel</h1>
            <p>Segala informasi terkini yang ada di pondok pesantren Zuhriyah</p>
        </div>
    </div>
</section>

<section class="isi_detail">
    <div class="container">
        <div class="images">
            <img src="{{ asset('images/gambar-3.jpg') }}" alt="">
            <div class="detail">
                <span class="span">April 15, 2025</span>
                <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio, officiis?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam accusamus animi fugiat et quisquam neque, voluptatem totam praesentium veritatis beatae asperiores voluptatum nesciunt ullam? Optio iste illo ipsum fugit vero, provident eos cum eum molestias delectus placeat ut corrupti enim, nobis quasi dolor, ea autem? Recusandae aliquam dicta corporis rerum.</p>      
            </div>
        </div>
    </div>
</section>
<!-- Services Section -->
    <section id="services" class=" services section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
      </div>
    </section>
    <!-- /Services Section -->
@endsection