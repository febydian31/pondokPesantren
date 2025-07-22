@extends('layouts.backend.app', ['title' => 'Profile'])

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">Tambah Profile</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('admin.profile.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- History (pakai Trix editor, multi text, disimpan JSON) --}}
                <div id="history-container" class="mb-4">
                    <label for="history">Sejarah Pondok Pesantren</label>
                    <div class="mb-2">
                        <input type="hidden" name="history[]" id="history-0" value="{{ old('history.0') }}">
                        <trix-editor input="history-0"></trix-editor>
                    </div>
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
                    @foreach ($fields as $name => $label)
                        <div class="col-md-6 mb-4">
                            <h5>{{ $label }}</h5>
                            <div id="{{ $name }}-container">
                                <div class="input-group mb-2 align-items-center">
                                    <input type="text" name="{{ $name }}[]" class="form-control me-2"
                                        value="{{ old($name . '.0') }}">
                                    <button type="button" class="btn btn-danger" onclick="removeField(this)">×</button>
                                </div>
                            </div>
                            <button type="button" class="btn btn-sm btn-info"
                                onclick="addField('{{ $name }}')">Tambah {{ $label }}</button>
                        </div>
                    @endforeach

                    {{-- Instagram --}}
                    <div class="col-md-6 mb-4">
                        <label>Instagram</label>
                        <input type="text" name="ig" value="{{ old('ig', $profile->ig ?? '') }}"
                            class="form-control">
                    </div>

                    {{-- Facebook --}}
                    <div class="col-md-6 mb-4">
                        <label>Facebook</label>
                        <input type="text" name="fb" value="{{ old('fb', $profile->fb ?? '') }}"
                            class="form-control">
                    </div>

                    {{-- Email --}}
                    <div class="col-md-6 mb-4">
                        <label>Email</label>
                        <input type="email" name="email" value="{{ old('email', $profile->email ?? '') }}"
                            class="form-control">
                    </div>

                    {{-- WhatsApp --}}
                    <div class="col-md-6 mb-4">
                        <label>WhatsApp</label>
                        <input type="text" name="wa" value="{{ old('wa', $profile->wa ?? '') }}"
                            class="form-control">
                    </div>

                    {{-- Location --}}
                    <div class="col-md-6 mb-4">
                        <label>Location</label>
                        <input type="text" name="location" value="{{ old('location', $profile->location ?? '') }}"
                            class="form-control">
                    </div>

                    {{-- TikTok --}}
                    <div class="col-md-6 mb-4">
                        <label>TikTok</label>
                        <input type="text" name="tiktok" value="{{ old('tiktok', $profile->tiktok ?? '') }}"
                            class="form-control">
                    </div>
                    {{-- vidio --}}
                    <div class="col-md-6 mb-4">
                        <label>Vidio</label>
                        <input type="text" name="vidio" value="{{ old('vidio', $profile->vidio ?? '') }}"
                            class="form-control">
                    </div>

                    {{-- Struktur Organisasi --}}
                    <div class="col-md-6 mb-4">
                        <h5>Struktur Organisasi</h5>
                        <input type="file" name="organizational_structure" class="form-control mb-2" accept="image/*"
                            onchange="previewImage(this)">
                        <img id="preview-structure" src="#" alt="Preview" style="max-width: 100%; display: none;">
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        let trixIndex = 1;

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
            container.insertBefore(wrapper, container.querySelector('button'));
        }

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

        function removeField(button) {
            button.parentElement.remove();
        }

        function previewImage(input) {
            const file = input.files[0];
            const preview = document.getElementById('preview-structure');

            if (file && preview) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
