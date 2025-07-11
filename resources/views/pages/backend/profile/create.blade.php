@extends('layouts.backend.app', ['title' => 'Profile'])

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 text-gray-800">Tambah Profile</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- History --}}
            <div id="history-container" class="mb-4">
                <label for="history">History</label>
                <div class="mb-2">
                    <input type="hidden" name="history[]" id="history-0" value="{{ old('history.0') }}">
                    <trix-editor input="history-0"></trix-editor>
                </div>
            </div>
            <button type="button" class="btn btn-sm btn-info mb-3" onclick="addTrixField()">Tambah History</button>

            @php
                $fields = [
                    'vision' => 'Visi',
                    'mission' => 'Misi',
                    'programs' => 'Program',
                    'donations' => 'Donasi',
                    'social_media' => 'Media Sosial'
                ];
            @endphp

            {{-- Field Text Array --}}
            <div class="row">
                @foreach($fields as $name => $label)
                <div class="col-md-6 mb-4">
                    <h5>{{ $label }}</h5>
                    <div id="{{ $name }}-container">
                        <div class="input-group mb-2 align-items-center">
                            <input type="text" name="{{ $name }}[]" class="form-control me-2">
                            <button type="button" class="btn btn-danger" onclick="removeField(this)">×</button>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-info" type="button" onclick="addField('{{ $name }}')">Tambah {{ $label }}</button>
                </div>
                @endforeach

                {{-- Struktur Organisasi (gambar) --}}
                <div class="col-md-6 mb-4">
                    <h5>Struktur Organisasi</h5>
                    <div id="organizational_structure-container">
                        <div class="input-group mb-2 align-items-center">
                            <input type="file" name="organizational_structure[]" class="form-control me-2" accept="image/*" onchange="previewImage(this)">
                            <button type="button" class="btn btn-danger" onclick="removeField(this)">×</button>
                        </div>
                        <img class="mb-3" id="preview-0" src="#" alt="Preview" style="max-width: 100%; display: none;">
                    </div>
                    <button class="btn btn-sm btn-info" type="button" onclick="addImageField()">Tambah Struktur</button>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
let trixIndex = 1;

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

function addImageField() {
    const container = document.getElementById('organizational_structure-container');
    const wrapper = document.createElement('div');
    wrapper.className = 'input-group mb-2 align-items-center';

    const input = document.createElement('input');
    input.type = 'file';
    input.name = 'organizational_structure[]';
    input.className = 'form-control me-2';
    input.accept = 'image/*';
    input.onchange = () => previewImage(input);

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
        const preview = document.createElement('img');
        preview.style.maxWidth = '100%';
        preview.className = 'mb-2 mt-2';

        reader.onload = function(e) {
            preview.src = e.target.result;
        };

        reader.readAsDataURL(file);
        input.parentElement.appendChild(preview);
    }
}
</script>
@endsection
