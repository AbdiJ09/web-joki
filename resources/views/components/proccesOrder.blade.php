@extends('layouts.main')
@section('container')
    <section id="invoice">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 shadow-lg invoice-wrapper mt-5 text-dark">

                    <div class="header-invoice">
                        <h1>Lakukan Pembayaran Sebelum:</h1>
                        <h5>20:20,09 Maret 2023 WIB</h5>

                    </div>
                    <div class="invoice-content mt-3">
                        <div class="col-md-5 col-6">
                            <h6>Nomor Invoice</h6>
                        </div>
                        <div class="col-md-4">
                            <h6>{{ $customer->id_pesanan }}</h6>
                        </div>
                    </div>
                    <div class="invoice-content mt-3">
                        <div class="col-md-5 col-6">
                            <h6>Data Produk</h6>
                        </div>
                        <div class="col-md-4">
                            <h6>{{ $customer->select_joki }}</h6>
                        </div>
                    </div>
                    <div class="invoice-content mt-3">
                        <div class="col-md-5 col-6">
                            <h6>Data AKun</h6>
                        </div>
                        <div class="col-md-4">
                            <h6 class="data-akun">Data Protected</h6>
                        </div>
                    </div>
                    <div class="invoice-content mt-3">
                        <div class="col-md-5 col-6">
                            <h6>Nick Name</h6>
                        </div>
                        <div class="col-md-4">
                            <h6>{{ $customer->id_and_nick }}</h6>
                        </div>
                    </div>
                    <div class="invoice-content mt-3">
                        <div class="col-md-5 col-6">
                            <h6>Pembayaran</h6>
                        </div>
                        <div class="col-md-4">
                            <h6>{{ $customer->payment }}</h6>
                        </div>
                    </div>
                    <div class="invoice-content mt-3">
                        <div class="col-md-5 col-6">
                            <h6>Nomor Gopay</h6>
                        </div>
                        <div class="col-md-4">
                            <h6>089630289268</h6>
                        </div>
                    </div>
                    <div class="invoice-content mt-3">
                        <div class="col-md-5 col-6">
                            <h6>Status Pembayaran</h6>
                        </div>
                        <div class="col-md-4">
                            <h6 class="badge bg-danger">{{ $customer->status }}</h6>
                        </div>
                    </div>
                    <div class="invoice-content mt-3">
                        <div class="col-md-5 col-6">
                            <h6>Status Transkasi</h6>
                        </div>
                        <div class="col-md-4">
                            <h6 class="badge bg-danger">Belum Diproses</h6>
                        </div>
                    </div>
                    <div class="invoice-content mt-3">
                        <div class="col-md-5 col-6">
                            <h6>Total Tagihan</h6>
                        </div>
                        <div class="col-md-4">
                            <h6>RP.300.000</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
