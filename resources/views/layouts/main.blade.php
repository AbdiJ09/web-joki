<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AJ Store</title>
    <link rel="icon" href="/img/aj.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/swiper@10.0.0/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
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
</head>

<body>

    {{-- <x-paralax /> --}}
    <x-navbar />

    <div id="root">
        @yield('container')
    </div>



    @if (Request::is('/'))
        <x-orders />
    @endif
    <div class="loader">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66 66" height="100px" width="100px" class="spinner">
            <circle stroke="url(#gradient)" r="20" cy="33" cx="33" stroke-width="1"
                fill="transparent" class="path"></circle>
            <linearGradient id="gradient">
                <stop stop-opacity="1" stop-color="gold" offset="0%"></stop>
                <stop stop-opacity="0" stop-color="#000" offset="100%"></stop>
            </linearGradient>

        </svg>
    </div>
    @if (!Request::is('terms') && !Request::routeIs('process.orderan'))
        <x-preview />
    @endif

    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10.0.0/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <script src="/js/script.js"></script>
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
                // Perform further purchase actions here
                // ...

                $('#infoModal').modal('hide');
            });
        });
    </script>

    <script>
        $(window).on("load", function() {
            $(".loader").fadeOut("slow");
        });
    </script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            autoplay: {
                delay: 2000,
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
