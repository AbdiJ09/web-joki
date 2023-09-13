@extends('layouts.main')
@section('container')
    <section id="invoice">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 shadow-lg invoice-wrapper mt-5 text-dark">

                    <div class="header-invoice">
                        <h1>Lakukan Pembayaran Sebelum:</h1>
                        <h1 class="text-danger fw-bold fs-5">{{ substr($customer->payment_expiry, 11, 8) }}
                            WIB
                        </h1>
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
                            <h6>
                                @if ($customer->payment === 'DANA')
                                    Nomor Dana
                                @elseif($customer->payment === 'GOPAY')
                                    Nomor Gopay
                                @endif
                            </h6>
                        </div>
                        <div class="col-md-4">
                            <h6>
                                @if ($customer->payment === 'DANA')
                                    {{ $customer->paymentDetails->dana_number }}
                                @elseif($customer->payment === 'GOPAY')
                                    {{ $customer->paymentDetails->ovo_number }}
                                @else
                                    N/A
                                @endif
                            </h6>
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
                            <h6 class="badge bg-danger">{{ $customer->status }}</h6>
                        </div>
                    </div>
                    <div class="invoice-content mt-3">
                        <div class="col-md-5 col-6">
                            <h6>Total Tagihan</h6>
                        </div>
                        <div class="col-md-4">
                            <h6>RP.{{ $customer->price }}</h6>
                        </div>
                    </div>
                    <div class="invoice-content mt-3">
                        <div class="col-md-5 col-6">
                            <h6>Bukti Pembayaran</h6>
                        </div>
                        <div class="col-md-7">
                            <form action="" method="post">
                                @csrf
                                <div class="file-input-container">
                                    <input type="file" id="image" name="image" onchange="previewImage()">
                                    <label for="image" class="label-img">Upload Bukti</label>
                                </div>
                                <img class="img-fluid img-preview" id="img-preview" src="">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function previewImage() {
            const image = document.getElementById('image')
            const imgPreview = document.getElementById('img-preview')
            imgPreview.style.display = "block";
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
