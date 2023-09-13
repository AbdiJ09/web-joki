@extends('layouts.main')
@section('container')
    <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content informasi-content">
                <div class="modal-header informasi-header">
                    <h5 class="modal-title" id="infoModalLabel">Informasi Sebelum Order Jasa Joki</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body informasi-body">
                    Sebelum Anda order, harap perhatikan informasi berikut:

                    <p class="text-warning mt-3">Orderan Joki Di Cek Pukul 09.00 - 21.00 WIB
                        (Jika Order Melewati Batas Pengecekan Orderan , Maka Orderan Di Cek di Hari Berikutnya)</p>
                    <ol>
                        <li>Matikan Verifikasi Akun Untuk Mempermudah Login</li>
                        <li>Jika akun di login Tanpa izin , maka proses Joki Akan di batalkan dan uang akan hangus</li>
                        <li>Jika Ada Problem saat login ke akun ,maka akan segera di Hubungi oleh admin</li>
                        <li>Jika Akun Belum Di Proses Selama 1-3 Jam Harap Hubungi Contact US/Admin</li>
                        <li>Jika Menemukan adanya Penjoki yang menawarkan jasa joki tanpa dari nomer wa resmi kami / tanpa
                            dari instagram official kami @aj_store.23 Customer Akan Mendapatkan joki gratis (Lapor
                            Ke Admin AJ Store / Contact US Yang Ada Di Website) Dan Memberikan Bukti </li>
                        <li>Jika Proses Joki Sudah Selesai Maka akan Di Kabarin Oleh Admin</li>
                    </ol>
                    <p>Jika Butuh Bantuan Harap Hubungi Admin AJ Store

                        Terimakasih

                    </p>
                </div>
                <div class="modal-footer d-flex justify-content-between informasi-footer">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="hideModalCheckbox">
                        <label class="form-check-label" for="hideModalCheckbox">Jangan tampilkan lagi</label>
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <section id="service">
        <div class="container">
            @if (session()->has('warning'))
                <div class="alert alert-warning alert-dismissible fade show col-md-7 position-absolute"
                    style="float: right;transform:translateY(-40px)" role="alert">
                    <strong><i class="bi bi-exclamation-triangle-fill"></i> Warning</strong>
                    {{ session('warning') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('warningg'))
                <div class="alert alert-warning alert-dismissible fade show col-md-7 position-absolute"
                    style="float: right;transform:translateY(-40px)" role="alert">
                    <strong><i class="bi bi-exclamation-triangle-fill"></i> Warning</strong>
                    {{ session('warningg') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="row justify-content-center align-items-start g-4">
                <div class="col-md-4">
                    <div class="shadow-lg sec-left mb-4">
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
                                <ol class="text-capitalize">
                                    <li>Isi Data Formulir Akun Kamu</li>
                                    <li>Pilih Jenis Joki Yang Kamu Mau</li>
                                    <li>Masukan Jumlah Order</li>
                                    <li>Pilih Metode Pembayaran</li>
                                    <li>Masukan No Whatsapp dengan benar</li>
                                    <li>Klik Order Now</li>
                                </ol>
                                <p class="text-warning">Estimasi Proses Jasa Joki Kita Usahakan Secepatnya </p>
                                <p class="text-warning">Minimal 24 Jam - Maximal 3x24 Jam</p>
                                <p class="text-warning">**Noted!!! : Sebelum Order Mohon Baca Informasi (Pop Up)
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="shadow-lg sec-left d-none d-lg-block">
                        <h1 class="fw-normal">Jasa Joki Lainnya</h1>
                        <a href="/order/joki-classic" class="btn btn-other px-0 py-0 w-100 mt-3">
                            <div class="row">
                                <div class="col-12 d-flex align-items-center">
                                    <div class="img-other me-auto">
                                        <img src="/img/betrik2.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="row title m-auto">
                                        <div class="col me-2">
                                            <div class="row">
                                                <div class="col">Joki Classic</div>
                                            </div>
                                            <div class="row">
                                                <div class="col" style="color: gold;">(Up Winrate)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/order/joki-gendong" class="btn btn-other px-0 py-0 w-100 mt-3">
                            <div class="row">
                                <div class="col-12 d-flex align-items-center">
                                    <div class="img-other me-auto">
                                        <img src="/img/roger.webp" alt="" class="img-fluid">
                                    </div>
                                    <div class="row title m-auto">
                                        <div class="col me-2">
                                            <div class="row">
                                                <div class="col">Joki Gendong</div>
                                            </div>
                                            <div class="row">
                                                <div class="col" style="color: gold;">(Ranked / Classic)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-8">

                    <form action="/order/joki-rank/payment" method="post" id="order-rank">
                        @csrf

                        <div class="form-account shadow sec-right mb-4">
                            <h1 class="text-center fw-normal">Form Akun</h1>
                            <div class="row g-4">
                                <div class="col-6">
                                    <input type="hidden" name="id_pesanan" id="id-pesanan"
                                        value="{{ $randomOrderId }}">
                                    <input type="hidden" name="price" id="price">
                                    <div class="mt-4">
                                        <input type="text" name="email" id="email"
                                            class="form-control focus-ring" placeholder="Masukkan Email/No HP">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mt-4 password">
                                        <input type="password" name="password" id="password"
                                            class="form-control focus-ring" placeholder="Masukkan Password">
                                        <i class="bi bi-eye iconPw" id="iconPw"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mt-1 mb-3">
                                        <input type="text" name="NickName" id="idNick"
                                            class="form-control focus-ring" placeholder="Masukkan ID & Nickname">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mt-1 mb-3">
                                        <select class="form-select focus-ring" aria-label="Default select example"
                                            name="LoginVia">
                                            <option selected value="-">Login Via</option>
                                            <option value="moonton">Moonton (Recommended)</option>
                                            <option value="vk">VK (Recommended)</option>
                                            <option value="facebook">Facebook</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="select-rank shadow sec-right mb-4">
                            <h1 class="text-center fw-normal">Pilih Joki Rank</h1>
                            <h5 class="mt-4 mb-0">Joki / Star</h5>
                            <div class="row row-cols-2 row-cols-lg-3 g-2 mt-1">
                                @foreach ($ranks as $rank)
                                    <div class="col-lg-4">
                                        <input type="radio" class="btn-check" name="Nominal"
                                            id="rank{{ $loop->iteration }}" autocomplete="off"
                                            value="{{ $rank->rank }} / Star">
                                        <label class="btn text-start" for="rank{{ $loop->iteration }}">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row fw-semibold">
                                                        <div class="col">{{ $rank->rank }} / Star</div>
                                                    </div>
                                                    <div class="row fst-italic">
                                                        <div class="col">
                                                            Rp <span
                                                                class="price-rank">{{ number_format($rank->price, 0, '.', '.') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                            <h5 class="mt-3 mb-0">Promo Joki</h5>
                            <div class="row row-cols-2 row-cols-lg-3 g-2 mt-1">
                                @foreach ($promos as $promo)
                                    <div class="col-lg-4">
                                        <input type="radio" class="btn-check" name="Nominal"
                                            id="promo{{ $loop->iteration }}" autocomplete="off"
                                            value="{{ $promo->promo }}">
                                        <label class="btn text-start" for="promo{{ $loop->iteration }}">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row fw-semibold">
                                                        <div class="col">{{ $promo->promo }}</div>
                                                    </div>
                                                    <div class="row fst-italic">
                                                        <div class="col price-rank">{{ $promo->price }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                            <h5 class="mt-3 mb-0">Joki Murah Meriah</h5>
                            <div class="row row-cols-2 row-cols-lg-3 g-2 mt-1">
                                @foreach ($murmers as $murmer)
                                    <div class="col-lg-4">
                                        <input type="radio" class="btn-check" name="Nominal"
                                            id="murmer{{ $loop->iteration }}" autocomplete="off"
                                            value="{{ $murmer->joki_murah }}">
                                        <label class="btn text-start" for="murmer{{ $loop->iteration }}">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row fw-semibold">
                                                        <div class="col">{{ $murmer->joki_murah }}</div>
                                                    </div>
                                                    <div class="row fst-italic">
                                                        <div class="col price-rank">{{ $murmer->price }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="total-star shadow sec-right mb-4">
                            <h1 class="text-center fw-normal">Masukkan Jumlah Order</h1>
                            <div class="mt-3">
                                <input type="number" class="form-control focus-ring total-order" id="star_order"
                                    name="order">
                            </div>
                            <div class="caution mt-2">
                                <p class="text-warning mb-0">Mohon Dibaca!</p>
                                <small class="text-white text-capitalize mt-0">
                                    1. Minimal order untuk joki rank / star : master/gm/epic/legend = 3, mythic<i
                                        class="bi bi-arrow-up"></i> = 2
                                    <br>
                                    2. minimal order untuk joki murah = 1
                                </small>
                            </div>
                        </div>

                        <div class="payment-method shadow sec-right mb-4">
                            <h1 class="text-center fw-normal">Pilih Metode Pembayaran</h1>
                            <div class="payment-drawwer mt-4">
                                <div class="header-payment" onclick="paymentOpen()">
                                    <h4><i class="fas fa-wallet"></i> E-Wallet</h4>
                                </div>
                                <div class="button-payment px-3">
                                    <div class="row row-cols-2 row-cols-md-3 g-3">
                                        <div class="col-lg-4 p-1">
                                            <div class="payment-group shadow h-100">
                                                <input type="radio" class="btn-check" name="payment" id="payment1"
                                                    value="DANA">
                                                <label class="btn label-payment d-block" for="payment1">
                                                    <div class="info-top">
                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/Logo_dana_blue.svg/1280px-Logo_dana_blue.svg.png"
                                                            alt="" height="23">
                                                        <p class="harga" id="select-price"></p>
                                                    </div>
                                                    <div class="info-bottom">
                                                        DANA
                                                        <div class="nominal">Dicek otomatis</div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 p-1">
                                            <div class="payment-group shadow h-100">
                                                <input type="radio" class="btn-check" name="payment" id="payment2"
                                                    value="GOPAY">
                                                <label class="btn label-payment d-block" for="payment2">
                                                    <div class="info-top">
                                                        <img src="/img/payment-logos/gopay2.png" height="23"
                                                            alt="" style="transform: translateX(-10px)">
                                                        <p class="harga" id="select-price"></p>
                                                    </div>
                                                    <div class="info-bottom">
                                                        OVO
                                                        <div class="nominal">Dicek otomatis</div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="footer-payment" onclick="paymentOpen()">
                                    <img src="/img/payment-logos/Shopeepay.png" class="bg-white" alt=""
                                        width="36" height="13">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/Logo_dana_blue.svg/1280px-Logo_dana_blue.svg.png"
                                        class="bg-white" alt="" width="41" height="13">
                                    <img src="/img/payment-logos/OVO.png" alt="" class="bg-white" width="24"
                                        height="13">
                                    <img src="/img/payment-logos/Linkaja.png" alt="" class="bg-white"
                                        width="13" height="13">
                                    <i class="bi bi-chevron-down"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card-order  shadow sec-right mb-4">
                            <h1 class="text-center fw-normal">No Whatsapp</h1>
                            <div class="form-group mt-3">
                                <label for="whatsapp" class="mb-2">No Whatsapp</label>
                                <input type="text" class="form-control focus-ring" name="whatsapp" id="whatsapp"
                                    placeholder="+62******">
                            </div>
                            <button class="btn order-btn w-100 mt-3" id="btn-order-rank" type="button">Order Now <i
                                    class="bi bi-cart"></i></button>
                        </div>


                        <div class="modal fade" id="modalVerif" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg  modal-dialog-scrollable">
                                <div class="modal-content verifikasi-content">
                                    <div class="modal-header verifikasi-header">
                                        <h1 class="modal-title" id="exampleModalLabel">Verifikasi Pesanan</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body fs-5 text-white verifikasi-body">
                                        <div class="row">
                                            <div class="col-md-6 verif-order">
                                                <p><i class="bi bi-envelope-open"></i> Email : <span
                                                        id="email-display"></span></p>
                                            </div>
                                            <div class="col-md-6 verif-order">
                                                <p><i class="bi bi-lock"></i> Pasword : <span
                                                        id="password-display"></span>
                                                </p>
                                            </div>
                                            <div class="col-md-6 verif-order">
                                                <p><i class="bi bi-person-check"></i> Id & Nickname : <span
                                                        id="NickName-display"></span></p>

                                            </div>
                                            <div class="col-md-6 verif-order">
                                                <p><i class="bi bi-box-arrow-in-right"></i> Login Via : <span
                                                        id="LoginVia-display"></span></p>
                                            </div>
                                            <div class="col-md-6 verif-order">
                                                <p><i class="bi bi-controller"></i> Jasa Joki Yang Dipilih : <span
                                                        id="Nominal-display"></span></p>
                                            </div>
                                            <div class="col-md-6 verif-order">
                                                <p><i class="bi bi-cart-plus"></i> Jumlah order : <span
                                                        id="order-display"></span></p>
                                            </div>
                                            <div class="col-md-6 verif-order">
                                                <p><i class="bi bi-whatsapp"></i> Nomor Whatsapp : <span
                                                        id="whatsapp-display"></span></p>
                                            </div>
                                            <div class="col-md-6 verif-order">
                                                <p><i class="bi bi-cash-stack"></i> Metode Pembayaran : <span
                                                        id="payment-display"></span></p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer verifikasi-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn pesan">Pesan Sekarang</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
