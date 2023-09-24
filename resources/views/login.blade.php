<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Black+Ops+One&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200&family=Russo+One&family=Stalinist+One&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>
    <div class="alert  d-none position-absolute" style="background: rgba(236, 41, 41, 0.829);top:20px" id="errorAlert">
        <strong>Error!</strong> Terdapat kesalahan dalam pendaftaran. Silakan periksa kembali.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

    </div>
    <div class="alert alert-success position-fixed d-none top-0 mt-3" id="successAlert">
        <strong class="text-success">Success!</strong> Pendaftaran berhasil.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @if (session()->has('failed'))
        <div class="alert alert-warning alert-dismissible fade show mt-4 position-absolute top-0"
            style="z-index: 100000" role="alert">
            <strong class="text-dark">Failed</strong> {{ session('failed') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <x-auth-desktop />

    {{-- form khusus hp --}}
    <x-auth-mobile />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="/js/login.js"></script>
</body>
<script>
    // Tangkap submit form
    $('#register').submit(function(event) {
        event.preventDefault(); // Hindari pengiriman form bawaan

        const form = $(this);

        // Kirimkan formulir dengan AJAX
        $.ajax({
            url: form.attr('action'),
            method: form.attr('method'),
            data: form.serialize(),
            success: function(data) {
                // Tampilkan pesan sukses atau lakukan tindakan lain jika diperlukan
                // ...
                // Redirect atau lakukan tindakan lain jika registrasi berhasil
                const successMessage =
                    '<div class="alert alert-success"><strong>Success!</strong> Pendaftaran berhasil.</div>';
                $('#successAlert').html(successMessage);
                $('#successAlert').removeClass('d-none');
                $('#errorAlert').addClass('d-none')
            },
            error: function(xhr) {
                // Tangkap pesan kesalahan dari respons JSON
                var errors = xhr.responseJSON.errors;

                if (Object.keys(errors).length > 0) {
                    var errorMessage =
                        '<strong>Error!</strong> Terdapat kesalahan dalam pendaftaran:<ul>';

                    $.each(errors, function(fieldName, errorMessages) {
                        errorMessage += '<li>' + errorMessages[0] + '</li>';
                    });

                    errorMessage += '</ul>';

                    // Tampilkan pesan kesalahan dalam alert Bootstrap
                    $('#errorAlert').html(errorMessage);
                    $('#errorAlert').removeClass('d-none');
                }
            }
        });
    });
</script>

</html>
