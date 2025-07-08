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
<!-- end sweet alert  -->




<!-- preview gambar artikel  -->
<script>
    function previewImage(event) {
    const input = event.target;
    const preview = document.getElementById('preview');

        if (input.files && input.files[0]) {
            const file = input.files[0];
            if (!file.type.startsWith('image/')) {
                alert("Harap pilih file gambar!");
                return;
            }

            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            }

            reader.readAsDataURL(file);
        }
    }
</script>
<!-- end preview artikel  -->

<!-- start preview at edit artikel  -->
<script>
    function previewImage(event) {
        const image = event.target.files[0];
        const preview = document.getElementById('preview');
        
        if (image) {
            preview.style.display = 'block';
            preview.src = URL.createObjectURL(image);
        }
    }
</script>
<!-- end preview at edit artikel  -->



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
