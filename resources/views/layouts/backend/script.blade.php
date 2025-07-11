<!-- script lain -->
<script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('backend/js/sb-admin-2.min.js') }}"></script>
<script src="{{ asset('backend/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!-- form array  -->
<script>
function addField(fieldName) {
    const container = document.getElementById(`${fieldName}-container`);
    const input = document.createElement('input');
    input.type = 'text';
    input.name = `${fieldName}[]`;
    input.className = 'form-control mb-2';
    container.appendChild(input);
}
</script>
<!-- end form array  -->

<!-- hapus form array  -->
<script>
    function addField(fieldName) {
        const container = document.getElementById(`${fieldName}-container`);

        const wrapper = document.createElement('div');
        wrapper.className = 'input-group mb-2';

        const input = document.createElement('input');
        input.type = 'text';
        input.name = `${fieldName}[]`;
        input.className = 'form-control';

        const btn = document.createElement('button');
        btn.className = 'btn btn-danger';
        btn.type = 'button';
        btn.textContent = '×';
        btn.onclick = function () {
            wrapper.remove();
        };

        wrapper.appendChild(input);
        wrapper.appendChild(btn);
        container.appendChild(wrapper);
    }

    function removeField(button) {
        button.parentElement.remove();
    }
</script>

<!-- hapus form array end -->


<script>
    // DataTable init
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });

    // Datepicker init
    $('#datepicker').datepicker({
    dateFormat:'dd/mm/yy', 
    autoclose: true,
    todayHighlight: true,
    orientation: "bottom auto"
});




    // Sweet alert delete
    document.addEventListener('DOMContentLoaded', function() {
        const forms = document.querySelectorAll('.form-hapus');
        forms.forEach(function(form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
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
                        form.submit();
                    }
                });
            });
        });
    });

    // preview gambar
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