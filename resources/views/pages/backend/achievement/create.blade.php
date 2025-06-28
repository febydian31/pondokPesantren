@extends('layouts.backend.app', ['title' => 'Tambah Prestasi'])

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">Add Prestasi</h1>
    </div>

    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <form action="{{ route('achievement.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="date">Tanggal</label>
                            <input type="date" name="date" value="{{ old('date') }}" class="form-control @error('date') is-invalid @enderror" value="{{ old('date') }}">
                            @error('date') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="achievement">Prestasi</label>
                            <input type="text" name="achievement" value="{{ old('achievement') }}" class="form-control @error('achievement') is-invalid @enderror" value="{{ old('achievement') }}">
                            @error('achievement') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="level">Tingkat</label>
                            <input type="text" name="level" value="{{ old('level') }}" class="form-control @error('level') is-invalid @enderror" value="{{ old('level') }}">
                            @error('level') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="organizer">Penyelenggara</label>
                            <input type="text" name="organizer" value="{{ old('organizer') }}" class="form-control @error('organizer') is-invalid @enderror" value="{{ old('organizer') }}">
                            @error('organizer') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="winner">Peraih</label>
                            <input type="text" name="winner" value="{{ old('winner') }}" class="form-control @error('winner') is-invalid @enderror" value="{{ old('winner') }}">
                            @error('winner') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-between" style="margin-bottom:10px;">
                        <a href="/admin/achievement" class="button btn btn-info">Kembali</a>
                        <button class="btn btn-success" type="submit">Tambah</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
