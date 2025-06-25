@extends('layouts.app')
@section('content')

<!-- Services Section -->
    <section id="services" class="programs services section">
      <a href="{{ route('kegiatan.create') }}" method="GET"></a>
       @if($allKegiatan->isEmpty())
          <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="judul ">
                <h1>Kegiatan Pesantren</h1>
            </div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Hari</th>
                <th scope="col">Waktu</th>
                <th scope="col">Kegiaan</th>
                <th scope="col">Pembimbing</th>
                <th scope="col">Lokasi</th>
              </tr>
            </thead>
            <tbody>
              </tbody>
            </table>
            <h5>Kegiatan Belum Tersedia</h5>
            </div>
          </div>
      @else
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="judul ">
            <h1>Kegiatan Pesantren</h1>
        </div>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Hari</th>
                <th scope="col">Waktu</th>
                <th scope="col">Kegiaan</th>
                <th scope="col">Pembimbing</th>
                <th scope="col">Lokasi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($allKegiatan as $key => $r)
              <tr>
                <td>{{$key + 1}}</td>
                  <td>{{$r->hari}}</td>
                  <td>{{$r->waktu}}</td>
                  <td>{{$r->kegiatan}}</td>
                  <td>{{$r->pembimbing}}</td>
                  <td>{{$r->lokasi}}</td>
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
      @endif
    </section>
    <!-- /Services Section -->
@endsection