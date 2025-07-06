@extends('layouts.backend.app', ['title' => 'Tambah Kegiatan'])

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">Tambah Kegiatan</h1>
    </div>

    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('activity.store') }}" method="POST">
                @csrf

                <div class="form-group mb-3">
                    <label for="day">Hari</label>
                    <select name="day" id="day" class="form-control @error('day') is-invalid @enderror">
                        <option value="">Pilih Hari</option>
                        @foreach ($days as $val)
                            <option value="{{ $val }}" {{ old('day') == $val ? 'selected' : '' }}>
                                {{ $val }}
                            </option>
                        @endforeach
                    </select>
                    @error('day')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                {{-- Waktu --}}
                <div class="form-group mb-3">
                    <label for="time">Waktu</label>
                    <input type="time" name="time" id="time"
                        class="form-control @error('time') is-invalid @enderror" value="{{ old('time') }}">
                    @error('time')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                {{-- Kegiatan --}}
                <div class="form-group mb-3">
                    <label for="activity">Kegiatan</label>
                    <input type="text" name="activity" id="activity"
                        class="form-control @error('activity') is-invalid @enderror" placeholder="Contoh: Belajar Mengaji"
                        value="{{ old('activity') }}">
                    @error('activity')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Pembimbing --}}
                <div class="form-group mb-3">
                    <label for="mentor">Pembimbing</label>
                    <input type="text" name="mentor" id="mentor"
                        class="form-control @error('mentor') is-invalid @enderror" placeholder="Contoh: Ustadz Ahmad"
                        value="{{ old('mentor') }}">
                    @error('mentor')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Lokasi --}}
                <div class="form-group mb-3">
                    <label for="location">Lokasi</label>
                    <input type="text" name="location" id="location"
                        class="form-control @error('location') is-invalid @enderror" placeholder="Contoh: Aula"
                        value="{{ old('location') }}">
                    @error('location')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                {{-- Tombol --}}
                <div class="d-flex justify-content-between mt-4">
                    <a href="/admin/activity" class="btn btn-info">Kembali</a>
                    <button class="btn btn-success" type="submit">Tambah</button>
                </div>
            </form>
        </div>
    </div>
@endsection
