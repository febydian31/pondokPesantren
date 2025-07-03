                    <script>
                    // Konfigurasi Toast
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true,
                        "positionClass": "toast-top-right",
                        "timeOut": "5000"
                    };

                    // Cek session dan tampilkan
                    @if(Session::has('success'))
                        toastr.success("{{ Session::get('success') }}");
                    @endif

                    @if(Session::has('info'))
                        toastr.info("{{ Session::get('info') }}");
                    @endif

                    @if(Session::has('warning'))
                        toastr.warning("{{ Session::get('warning') }}");
                    @endif

                    @if(Session::has('error'))
                        toastr.error("{{ Session::get('error') }}");
                    @endif
                </script>