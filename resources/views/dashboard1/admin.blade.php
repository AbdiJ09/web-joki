@extends('dashboard1.layouts.main')
@section('container')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Money</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        Rp.{{ number_format($sales, 0, '.', '.') }}
                                        <span class="text-success text-sm font-weight-bolder">70%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-warning shadow text-center border-radius-md">
                                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Users</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        {{ $users }}
                                        <span class="text-success text-sm font-weight-bolder">+3%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-warning shadow text-center border-radius-md">
                                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">New Clients</p>
                                    <h5 class="font-weight-bolder mb-0">

                                        {{ $orderRank->count() }}
                                        <span class="text-success text-sm font-weight-bolder">++</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-warning shadow text-center border-radius-md">
                                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="card mt-3">
            <div
                class="card-header d-flex h6 pb-2 text-uppercase position-relative fw-bolder text-white  bg-gradient-warning">
                Order Rank


            </div>
            <div class="card-body">
                @if ($orderRank->count() == 0)
                    <h5 class="text-center">Data Not Found</h5>
                @else
                    <div class="card shadow-lg">
                        @include('dashboard1.table')
                    </div>
                @endif
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Ketika elemen select dengan nama "filter" berubah
            $('select[name="filter"]').change(function() {
                // Submit formulir secara otomatis
                $('form').submit();
            });


        });
    </script>
    <script>
        var lihatGambarButtons = document.querySelectorAll(".lihat-gambar-btn");

        // Tambahkan event listener untuk setiap tombol
        lihatGambarButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var targetImageSrc = this.getAttribute("data-target");
                var modal = this.nextElementSibling; // Ambil modal yang berdekatan dengan tombol
                var modalImg = modal.querySelector(".gambar-content"); // Ambil gambar dalam modal

                // Set URL gambar dan tampilkan modal
                modalImg.src = targetImageSrc;
                modal.style.display = "block";

                // Tambahkan event listener untuk menutup modal jika diperlukan
                modal.addEventListener('click', function() {
                    modal.style.display = "none";
                });
            });
        });
    </script>
@endsection
