@extends('layouts.backend.app', ['title' => 'Tambah Prestasi'])

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">Tambah Prestasi</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('achievement.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal</label>
                    <input type="text" id="datepicker" name="date"
                        class="form-control @error('date') is-invalid @enderror" value="{{ old('date') }}" placeholder="Pilih tanggal">
                    @error('date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="achievement" class="form-label">Prestasi</label>
                    <input type="text" name="achievement" id="achievement"
                        class="form-control @error('achievement') is-invalid @enderror" value="{{ old('achievement') }}"
                        placeholder="Contoh: Juara 1 Lomba Cerdas Cermat">
                    @error('achievement')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="level" class="form-label">Tingkat</label>
                    <input type="text" name="level" id="level"
                        class="form-control @error('level') is-invalid @enderror" value="{{ old('level') }}"
                        placeholder="Contoh: Kabupaten">
                    @error('level')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="organizer" class="form-label">Penyelenggara</label>
                    <input type="text" name="organizer" id="organizer"
                        class="form-control @error('organizer') is-invalid @enderror" value="{{ old('organizer') }}"
                        placeholder="Contoh: Dinas Pendidikan">
                    @error('organizer')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="winner" class="form-label">Peraih</label>
                    <input type="text" name="winner" id="winner"
                        class="form-control @error('winner') is-invalid @enderror" value="{{ old('winner') }}"
                        placeholder="Contoh: Ahmad">
                    @error('winner')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('achievement.index') }}" class="btn btn-info">Kembali</a>
                    <button type="submit" class="btn btn-success">Tambah</button>
                </div>

            </form>
        </div>
    </div>
@endsection
