@extends('layouts.backend.app', ['title' => 'Edit Profil'])

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 text-gray-800">Edit Profil</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('profile.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- History --}}
            <h5>History</h5>
            <div id="history-container" class="mb-4">
                @foreach(json_decode($profile->history ?? '[]', true) as $index => $item)
                    <div class="mb-2">
                        <input type="hidden" name="history[]" id="history-{{ $index }}" value="{{ $item }}">
                        <trix-editor input="history-{{ $index }}"></trix-editor>
                    </div>
                @endforeach
            </div>
            @php
                $fields = [
                    'vision' => 'Visi',
                    'mission' => 'Misi',
                    'programs' => 'Program',
                    'donations' => 'Rekening',
                ];
            @endphp

            {{-- Field Text Array --}}
            <div class="row">
                @foreach($fields as $name => $label)
                <div class="col-md-6 mb-4">
                    <h5>{{ $label }}</h5>
                    <div id="{{ $name }}-container">
                        @foreach(json_decode($profile->$name ?? '[]', true) as $item)
                            <div class="input-group mb-2 align-items-center">
                                <input type="text" name="{{ $name }}[]" class="form-control me-2" value="{{ $item }}">
                                <button type="button" class="btn btn-danger" onclick="removeField(this)">×</button>
                            </div>
                        @endforeach
                    </div>
                    <button class="btn btn-sm btn-info" type="button" onclick="addField('{{ $name }}')">Tambah {{ $label }}</button>
                </div>
                @endforeach
                <div class="row">
                    {{-- Instagram --}}
                    <div class="col-md-6 mb-4">
                        <label>Instagram</label>
                        <input type="text" name="ig" value="{{ old('ig', $profile->ig ?? '') }}" class="form-control">
                    </div>

                    {{-- Facebook --}}
                    <div class="col-md-6 mb-4">
                        <label>Facebook</label>
                        <input type="text" name="fb" value="{{ old('fb', $profile->fb ?? '') }}" class="form-control">
                    </div>

                    {{-- WhatsApp --}}
                    <div class="col-md-6 mb-4">
                        <label>WhatsApp</label>
                        <input type="text" name="wa" value="{{ old('wa', $profile->wa ?? '') }}" class="form-control">
                    </div>

                    {{-- TikTok --}}
                    <div class="col-md-6 mb-4">
                        <label>TikTok</label>
                        <input type="text" name="tiktok" value="{{ old('tiktok', $profile->tiktok ?? '') }}" class="form-control">
                    </div>

                    {{-- Location --}}
                    <div class="col-md-6 mb-4">
                        <label>Alamat</label>
                        <input type="text" name="location" value="{{ old('location', $profile->location ?? '') }}" class="form-control">
                    </div>

                    {{-- Email --}}
                    <div class="col-md-6 mb-4">
                        <label>Email</label>
                        <input type="email" name="email" value="{{ old('email', $profile->email ?? '') }}" class="form-control">
                    </div>

                    {{-- Vidio --}}
                    <div class="col-md-6 mb-4">
                        <label>Vidio</label>
                        <input type="text" name="vidio" class="form-control" value="{{ old('vidio', $profile->vidio) }}">
                    </div>
                    {{-- Struktur Organisasi (gambar tunggal) --}}
                    <div class="col-md-6 mb-4">
                        <label>Struktur Organisasi</label>
                        <img class="mb-3" id="preview" src="{{ $profile->organizational_structure ? asset('storage/' . $profile->organizational_structure) : '#' }}" 
                            alt="Preview" style="max-width: 100%; {{ $profile->organizational_structure ? '' : 'display:none;' }}">
                        <input type="file" name="organizational_structure" class="form-control mb-2" accept="image/*" onchange="previewImage(event)">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mt-3">Update</button>
            </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
let trixIndex = {{ is_array(json_decode($profile->history ?? '[]', true)) ? count(json_decode($profile->history ?? '[]', true)) : 0 }};

function addField(fieldName) {
    const container = document.getElementById(`${fieldName}-container`);
    const wrapper = document.createElement('div');
    wrapper.className = 'input-group mb-2 align-items-center';

    const input = document.createElement('input');
    input.type = 'text';
    input.name = `${fieldName}[]`;
    input.className = 'form-control me-2';

    const btn = document.createElement('button');
    btn.type = 'button';
    btn.className = 'btn btn-danger';
    btn.textContent = '×';
    btn.onclick = () => wrapper.remove();

    wrapper.appendChild(input);
    wrapper.appendChild(btn);
    container.appendChild(wrapper);
}

function addTrixField() {
    const container = document.getElementById('history-container');
    const index = trixIndex++;

    const wrapper = document.createElement('div');
    wrapper.className = 'mb-2';

    const input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'history[]';
    input.id = 'history-' + index;

    const editor = document.createElement('trix-editor');
    editor.setAttribute('input', 'history-' + index);

    wrapper.appendChild(input);
    wrapper.appendChild(editor);
    container.appendChild(wrapper);
}

function removeField(button) {
    button.parentElement.remove();
}

function previewImage(input) {
    const file = input.files[0];
    if (file) {
        const reader = new FileReader();
        const preview = document.getElementById('preview-structure');
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        };
        reader.readAsDataURL(file);
    }
}
</script>
@endsection
