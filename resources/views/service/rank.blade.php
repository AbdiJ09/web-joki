@extends('layouts.main')
@section('container')
    <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="infoModalLabel">Informasi Sebelum Order Jasa Joki</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Sebelum Anda me, harap perhatikan informasi berikut:
                    <ul>
                        <li>Matikan Verifikasi Akun Untuk Mempermudah Login</li>
                        <li>Jika akun di login Tanpa izin , maka proses Joki Akan di batalkan dan uang akan hangus</li>
                        <li>Jika Ada Problem saat login ke akun ,maka akan segera di Hubungi oleh admin</li>
                    </ul>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="hideModalCheckbox">
                        <label class="form-check-label" for="hideModalCheckbox">Jangan tampilkan lagi</label>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <section id="service">
        <div class="container">

            <div class="row justify-content-center align-items-start gap-4">
                <div class="col-md-4 shadow-lg sec-left">
                    <div class="logo shadow-lg">
                        <img src="/img/3.png" class="img-fluid w-100" alt="">
                    </div>
                    <div class="content-text text-start mt-5">
                        <h2 class="fw-normal ">Joki <span style="color: gold">Rank</span></h2>
                        <p class="text-white-50 mt-3 mb-1">Jasa Joki (Up Rank)</p>
                        <p class="fw-normal fs-5" style="color: gold">Open 24 Jam</p>
                        <h5 class="fw-normal text-white">Orderan Di Cek Admin Pukul 10.00-22.00 WIB</h5>
                        <div class="how-order border-top border-warning my-3 border-3">
                            <h5 class="fw-normal mt-2">Cara Order:</h5>
                            <ul>
                                <li>Isi Data Formulir Akun Kamu</li>
                                <li>Pilih Jenis Joki Yang Kamu Mau</li>
                                <li>Masukan Jumlah Order</li>
                                <li>Pilih Metode Pembayaran</li>
                                <li>Masukan No Whast'App</li>
                                <li>Klick Order Now</li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 shadow sec-right">
                    <h1 class="text-center fw-normal">Form Akun</h1>
                    <form action="" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>



    </section>
@endsection
