@extends('layouts.backend.app', ['title' => 'Profil'])

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800"> Profil</h1>
        @if ($profiles->isNotEmpty())
            <a href="{{ route('admin.profile.edit', $profiles->first()->id) }}" class="btn btn-warning">
                Edit Profil
            </a>
        @else
            <a href="{{ route('admin.profile.create') }}" class="btn btn-primary">
                Tambah Profil
            </a>
        @endif
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead>
                        <tr>
                            <th>History</th>
                            <th>Visi</th>
                            <th>Misi</th>
                            <th>Program</th>
                            <th>Rekening</th>
                            <th>Instagram</th>
                            <th>Facebook</th>
                            <th>Whatshapp</th>
                            <th>Tiktok</th>
                            <th>Lokasi</th>
                            <th>Email</th>
                            <th>Vidio</th>
                            <th>Struktur Organisasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($profiles as $profile)
                            <tr>

                                {{-- History --}}
                                <td>
                                    @php
                                        $historyText = implode(' ', json_decode($profile->history ?? '[]', true));
                                    @endphp
                                    {!! Str::words($historyText, 20, '...') !!}
                                </td>

                                {{-- Visi --}}
                                <td>
                                    <ul class="mb-0">
                                        @foreach (array_slice(json_decode($profile->vision ?? '[]', true), 0, 2) as $item)
                                            <li>{{ Str::words($item, 10, '...') }}</li>
                                        @endforeach
                                    </ul>
                                </td>

                                {{-- Misi --}}
                                <td>
                                    <ul class="mb-0">
                                        @foreach (array_slice(json_decode($profile->mission ?? '[]', true), 0, 2) as $item)
                                            <li>{{ Str::words($item, 10, '...') }}</li>
                                        @endforeach
                                    </ul>
                                </td>

                                {{-- Program --}}
                                <td>
                                    <ul class="mb-0">
                                        @foreach (array_slice(json_decode($profile->programs ?? '[]', true), 0, 2) as $item)
                                            <li>{{ Str::words($item, 10, '...') }}</li>
                                        @endforeach
                                    </ul>
                                </td>

                                {{-- Rekening --}}
                                <td>
                                    <ul class="mb-0">
                                        @foreach (array_slice(json_decode($profile->donations ?? '[]', true), 0, 2) as $item)
                                            <li>{{ Str::words($item, 10, '...') }}</li>
                                        @endforeach
                                    </ul>
                                </td>

                                <td>{{ $profile->ig }}</td>
                                <td>{{ $profile->fb }}</td>
                                <td>{{ $profile->wa }}</td>
                                <td>{{ $profile->tiktok }}</td>
                                <td>{{ $profile->location }}</td>
                                <td>{{ $profile->email }}</td>

                                {{-- Vidio --}}
                                <td>{!! Str::limit(strip_tags($profile->vidio), 30, '...') !!}</td>

                                {{-- Struktur Organisasi --}}
                                <td>
                                    @if ($profile->organizational_structure)
                                        <img src="{{ asset('storage/' . $profile->organizational_structure) }}"
                                            alt="Struktur Organisasi" style="max-width: 100px;">
                                    @else
                                        <span class="text-muted">Belum ada gambar</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="15" class="text-center">Belum ada data profil</td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
