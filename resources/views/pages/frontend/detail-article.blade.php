@extends('layouts.frontend.app', ['title' => $artikel->title])

@section('content')
    <!-- Hero Section -->
    <section class="article-hero">
        <div class="container">
            <div class="hero-content">
                <div class="breadcrumb">
                    <a href="{{ url('/') }}">Beranda</a>
                    <span>/</span>
                    <a href="{{ route('frontend.article.index') }}">Artikel</a>
                    <span>/</span>
                    <span>{{ $artikel->title }}</span>
                </div>
                <h1 class="article-title">{{ $artikel->title }}</h1>
            </div>
        </div>
    </section>
    <!-- Article Content -->
    <div class="article-content">
        <div class="container">
                <div class="main-content">
                    <!-- Featured Image -->
                    <div class="featured-image">
                        <img src="{{ asset('storage/' . $artikel->image) }}" alt="{{ $artikel->title }}" class="img-fluid">
                    </div>

                    <!-- Article Body -->
                    <div class="article-body">
                        <div class="content-text">
                            {!! $artikel->content !!}
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection
