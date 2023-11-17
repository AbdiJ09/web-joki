<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="view-transition" content="same-origin">
    <title>AJ Store</title>
    <link rel="icon" href="/img/besar-01.png" type="image/x-icon">
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <link href="https://cdn.jsdelivr.net/npm/swiper@10.0.0/swiper-bundle.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Black+Ops+One&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200&family=Russo+One&family=Stalinist+One&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/build/assets/app-905f6a0c.css">
    <link href="/css/style.css" rel="stylesheet">

</head>

<body>

    <x-navbar />

    <div id="root">
        @yield('container')
    </div>

    @if (Request::is('/'))
        <x-events />
        <x-popular />
        <x-orders />
        <x-preview />
    @endif
    <x-footer />



    <script src="https://cdn.jsdelivr.net/npm/swiper@10.0.0/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="/build/assets/app-d065c3c4.js"></script>
    <script src="/js/script.js"></script>
    {{-- <script>
        // Fungsi untuk menampilkan SweetAlert
        function showSweetAlert(title, text, icon) {
            Swal.fire({
                title: title,
                text: text,
                icon: icon,
            });
        }
        $('#btn-submit').click(function(e) {
            e.preventDefault();
            var id_pesanan = $('#id_pesanan').val();
            if ($('#image')[0].files.length === 0) {
                showSweetAlert('Error', 'Pilih gambar terlebih dahulu', 'error');
                return;
            }
            $.ajax({
                type: 'POST',
                url: '/proccess/orderan/transaksi/' + id_pesanan,
                data: new FormData($('#transaksi')[0]),
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.success) {
                        showSweetAlert('Pembayaran Berhasil', response.message, 'success');

                    } else {
                        showSweetAlert('Pembayaran Gagal', response.message, 'error');
                    }
                },
                error: function(error) {
                    console.log(error);
                    showSweetAlert('Error', 'Terjadi kesalahan saat memproses pembayaran', 'error');
                }
            });
        });
    </script> --}}
    <script>
        document.getElementById("show-error-button").addEventListener("click", function() {

            iziToast.error({
                title: 'Error',
                message: 'Terjadi kesalahan dalam aplikasi.',
                position: 'topRight',
                timeout: 5000,
                theme: 'light',
                timeout: 2000
            });

        });
    </script>

    <script>
        $(document).ready(function() {
            let modalShown = localStorage.getItem('modalShown');

            if (!modalShown) {
                $('#infoModal').modal('show');
            }

            $('#infoModal').on('hidden.bs.modal', function() {
                if ($('#hideModalCheckbox').prop('checked')) {
                    localStorage.setItem('modalShown', 'true');
                }
            });

            $('#continueButton').click(function() {

                $('#infoModal').modal('hide');
            });
        });
    </script>


    <script>
        const swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 2,
                slideShadows: true,
            },
            loop: true,
        });
    </script>


</body>

</html>
