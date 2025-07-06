<!-- sweet alert  -->
{{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Login Gagal',
        text: '{{ session('error') }}',
        confirmButtonText: 'OK',
        timer: 4000
    });
</script>
@endif --}}

<script src="{{ asset('auth/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('auth/js/popper.min.js') }}"></script>
<script src="{{ asset('auth/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('auth/js/main.js') }}"></script>
