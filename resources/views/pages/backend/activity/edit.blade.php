@extends('layouts.backend.app', ['title' => 'Edit Kegiatan'])

@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">Edit Kegiatan</h1>
    </div>

    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <form action="{{ route('activity.update', $activity->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Day</label>
                            <input type="text" name="day" class="form-control @error('day') is-invalid @enderror" value="{{ old('day', $activity->day) }}" required>
                            @error('day') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label>Time</label>
                            <input type="time" name="time" class="form-control @error('time') is-invalid @enderror" value="{{ old('time', \Carbon\Carbon::parse($activity->time)->format('H:i')) }}" required>
                            @error('time') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label>Activity</label>
                            <input type="text" name="activity" class="form-control @error('activity') is-invalid @enderror" value="{{ old('activity', $activity->activity) }}" required>
                            @error('activity') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Pembimbing</label>
                            <input type="text" name="mentor" class="form-control @error('mentor') is-invalid @enderror" value="{{ old('activity', $activity->mentor) }}" required>
                            @error('mentor') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Lokasi</label>
                            <input type="text" name="location" class="form-control @error('location') is-invalid @enderror" value="{{ old('activity', $activity->location) }}" required>
                            @error('location') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-between" style="margin-bottom:10px;">
                        <a href="/admin/activity" class="button btn btn-info">Kembali</a>
                        <button class="btn btn-success" type="submit">Edit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
