@extends('layouts.backend.app', ['title' => 'Daftar Profil'])

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 text-gray-800">Daftar Profil</h1>
    <a href="{{ route('profile.create') }}" class="btn btn-primary">Tambah Profil</a>
</div>


    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>History</th>
                            <th>Visi</th>
                            <th>Misi</th>
                            <th>Struktur Organisasi</th>
                            <th>Program</th>
                            <th>Donasi</th>
                            <th>Sosial Media</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($profiles as $profile)
                        <tr>
                            <td>{{ $profile->id }}</td>
                            <td>
                                <ul>
                                    @foreach($profile->history as $item)
                                        <li>{!! $item !!}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    @foreach($profile->vision as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    @foreach($profile->mission as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    @foreach($profile->organizational_structure as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    @foreach($profile->programs as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    @foreach($profile->donations as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    @foreach($profile->social_media as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <a href="{{ route('profile.edit', $profile->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="9" class="text-center">Belum ada data profil</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
