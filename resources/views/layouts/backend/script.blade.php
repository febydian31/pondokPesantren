<!-- sweet alert  -->
<script>
    // Tangkap event submit form
    document.addEventListener('DOMContentLoaded', function() {
        const forms = document.querySelectorAll('.form-hapus');

        forms.forEach(function(form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault(); // Cegah submit default

                Swal.fire({
                    title: 'Apakah kamu yakin?',
                    text: "Data akan dihapus secara permanen!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, hapus!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit(); // Submit form jika konfirmasi
                    }
                });
            });
        });
    });
</script>


<!-- CKEditor CDN -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#konten'))
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#konten_father'))
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#konten_mother'))
        .catch(error => {
            console.error(error);
        });
</script>



<!-- Load core RTE terlebih dahulu -->

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('backend/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('backend/js/sb-admin-2.min.js') }}"></script>


<script src="{{ asset('backend/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>
