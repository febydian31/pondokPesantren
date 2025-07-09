@extends('layouts.backend.app', ['title' => 'Edit Prestasi'])

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">Edit Prestasi</h1>
    </div>

    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <form action="{{ route('achievement.update', $achievement->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Tanggal</label>
                            <input type="text" id="datepicker" name="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date', $achievement->date) }}" required>
                            @error('date') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label>Prestasi</label>
                            <input type="text" name="achievement" class="form-control @error('achievement') is-invalid @enderror" value="{{ old('achievement', $achievement->achievement) }}" required>
                            @error('achievement') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label>Tingkat</label>
                            <input type="text" name="level" class="form-control @error('level') is-invalid @enderror" value="{{ old('level', $achievement->level) }}" required>
                            @error('level') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Penyelenggara</label>
                            <input type="text" name="organizer" class="form-control @error('organizer') is-invalid @enderror" value="{{ old('organizer', $achievement->organizer) }}" required>
                            @error('organizer') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Peraih</label>
                            <input type="text" name="winner" class="form-control @error('winner') is-invalid @enderror" value="{{ old('winner', $achievement->winner) }}" required>
                            @error('winner') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-between" style="margin-bottom:10px;">
                        <a href="/admin/achievement" class="button btn btn-info">Kembali</a>
                        <button class="btn btn-success" type="submit">Edit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
