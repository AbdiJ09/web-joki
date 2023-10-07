@extends('layouts.main')
@section('container')
    <section id="invoice_detail">
        <div class="container py-5 mt-5">
            <h1 class="fw-medium text-center">DETAIL INVOICE</h1>
            <div class="invoice-detail-wrapper">

                <img src="/img/lance.jpg" class="img-fluid  mx-auto d-block " alt="">
                <h5 class="badge  fs-6" style="background: goldenrod">Joki Rank</h5>
                <div class="invoice-data-account my-2">
                    <span class="badge  fs-7 p-2 mb-2" style="background: goldenrod">Data Akun</span>
                    <div class="p-2 data rounded-2 my-2 m-auto" style="background: #353535">
                        <h6>
                            <span style="display: inline-block; width: 100px; text-align: left;"
                                class="text-warning">Email</span>
                            : example@gmail.com
                        </h6>

                    </div>
                    <div class="p-2 data rounded-2  m-auto my-2" style="background: #353535">
                        <h6>
                            <span
                                style="display: inline-block; width: 100px; text-align: left;"class="text-warning">Password</span>
                            : example123
                        </h6>

                    </div>
                    <div class="p-2 data rounded-2  m-auto my-2" style="background: #353535">
                        <h6>
                            <span
                                style="display: inline-block; width: 100px; text-align: left;"class="text-warning">NickName</span>
                            : example
                        </h6>

                    </div>
                    <div class="p-2 data rounded-2  m-auto my-2" style="background: #353535">
                        <h6>
                            <span style="display: inline-block; width: 100px; text-align: left;"class="text-warning">Login
                                via</span>
                            : Montton
                        </h6>

                    </div>



                </div>
                <div class="invoice-more-detail my-2">
                    <span class="badge  fs-7 p-2 mb-2" style="background: goldenrod">More Detail</span>
                    <div class="p-2 data rounded-2 my-2  m-auto" style="background: #353535">
                        <h6>
                            <span style="display: inline-block; width: 100px; text-align: left;"
                                class="text-warning">Pesanan</span>
                            : Master/Star
                        </h6>

                    </div>
                    <div class="p-2 data rounded-2 my-2  m-auto" style="background: #353535">
                        <h6>
                            <span style="display: inline-block; width: 100px; text-align: left;" class="text-warning">Qty
                                Order</span>
                            : 10
                        </h6>

                    </div>
                    <div class="p-2 data rounded-2 my-2  m-auto" style="background: #353535">
                        <h6>
                            <span style="display: inline-block; width: 100px; text-align: left;"
                                class="text-warning">payment
                                method</span>
                            : Gopay
                        </h6>

                    </div>
                    <div class="p-2 data rounded-2 my-2  m-auto" style="background: #353535">
                        <h6>
                            <span style="display: inline-block; width: 100px; text-align: left;"
                                class="text-warning">Whatsapp</span>
                            : 0897373773
                        </h6>

                    </div>
                    <div class="p-2 data rounded-2 my-2  m-auto" style="background: #353535">
                        <h6>
                            <span style="display: inline-block; width: 100px; text-align: left;"
                                class="text-warning">Status</span>
                            : Success
                        </h6>

                    </div>
                </div>
                <h1 class="fst-italic text-center w-100">**Jangan Lupa Screenshot**</h1>
            </div>
        </div>



    </section>
@endsection
