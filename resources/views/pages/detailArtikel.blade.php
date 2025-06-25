@extends('layouts.app')
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
            <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="">
            <div class="detail">
                <span class="span">{{$artikel->tanggal}}</span>
                <h3>{{$artikel->judul}}</h3>
                <p>{{$artikel->content}}</p>      
            </div>
        </div>
    </div>
</section>
@endsection