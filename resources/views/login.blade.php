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
        <div class="alert alert-warning alert-dismissible fade show position-absolute top-0 mt-4" role="alert">
            <strong>Failed</strong> {{ session('failed') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container">
        <a href="/"> <button type="button" class="btn-back" title="Back to Post">
                <i class='bx bx-arrow-back' style="color: #000"></i>
            </button></a>
        <div class="curved-shape"></div>
        <div class="curved-shape2"></div>
        <div class="form-box Login">
            <h2 class="animation" style="--D:0;--s:10">Login</h2>
            <form action="/login" method="POST">
                @csrf
                <div class="input-box animation" style="--D:1;--s:12">
                    <input type="text" name="email" id="email" required>
                    <label for="email">Email</label>
                    <i class="bx bxs-user"></i>
                </div>
                <div class="input-box animation" style="--D:2;--s:13">
                    <input type="password" name="password" id="password" required>
                    <label for="password">Password</label>
                    <i class="bx bxs-lock-alt"></i>
                </div>
                <div class="input-box animation" style="--D:3;--s:14">
                    <button class="btn-login" type="submit">Login</button>
                </div>
                <div class="regi-link animation" style="--D:4;--s:15">
                    <p>Don't have account? <a href="#" class="singup">Sing Up</a></p>
                </div>
            </form>

        </div>
        <div class="info-content Login">
            <h2 class="animation" style="--D:0; --s:14">WELCOME BACK!</h2>
            <p class="animation" style="--D:1; --s:15">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Laboriosam,
                autem?</p>
        </div>
        <div class="form-box Register">
            <h2 class="animation" style="--li:17;--s:0">Register</h2>
            <form action="/register" id="register" method="POST">
                @csrf

                <div class="input-box animation" style="--li:18;--s:1">
                    <input type="text" name="username" class="is-invalid" id="username" required autocomplete="off">
                    <label for="username">Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <i class="fw-bold">@</i>
                </div>
                <div class="input-box animation" style="--li:18;--s:1">
                    <input type="text" name="name" class="is-invalid" id="name" required autocomplete="off">
                    <label for="name">Name</label>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <i class="bx bxs-user"></i>
                </div>
                <div class="input-box animation" style="--li:18;--s:1">
                    <input type="email" name="email"class="is-invalid" id="email" required
                        autocomplete="off">
                    <label for="email">Email</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <i class='bx bxl-gmail' style='color:#ffffff'></i>
                </div>
                <div class="input-box animation" style="--li:19;--s:2">
                    <input type="password" name="password" class="is-invalid" id="password" required
                        autocomplete="off">
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <i class="bx bxs-lock-alt"></i>
                </div>
                <div class="input-box animation" style="--li:20;--s:3">
                    <button class="btn-login" type="submit">Register</button>
                </div>
                <div class="regi-link animation" style="--li:21;--s:4">
                    <p>Have Acoount? <a href="#" class="singin">Sing In</a></p>
                </div>
            </form>

        </div>
        <div class="info-content Register">
            <h2 class="animation" style="--li:17;--s:0">WELCOME BACK!</h2>
            <p class="animation" style="--li:18;--s:1">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Laboriosam,
                autem?</p>
        </div>
    </div>
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
