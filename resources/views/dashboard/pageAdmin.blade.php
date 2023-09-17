@extends('dashboard.layout.main')
@section('pageAdmin')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card bg-gradient-dark">
                    <div class="card-header p-3 pt-2 bg-gradient-dark">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">weekend</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize opacity-6 text-white">Today's Money</p>
                            <h4 class="mb-0 text-white">$53k</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3 bg-gradient-dark">
                        <p class="mb-0 text-white opacity-6"><span class="text-success text-sm font-weight-bolder">+55%
                            </span>than
                            lask week</p>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-sm-6">
                <div class="card bg-gradient-dark">
                    <div class="card-header p-3 pt-2 bg-gradient-dark">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">weekend</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize opacity-6 text-white">Sales</p>
                            <h4 class="mb-0 text-white">$103,430</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3 bg-gradient-dark">
                        <p class="mb-0 opacity-6 text-white"><span class="text-success text-sm font-weight-bolder">+5%
                            </span>than
                            yesterday</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4 mt-5">
            <div class=" mb-md-0 mb-4 col-14">
                <div class="card" style="background: #242222">
                    <div class="card-header pb-0 bg-gradient-dark">
                        <div class="row">
                            <div class="col-lg-6 col-7">
                                <h6 class="text-white">Orderan</h6>
                                <p class="text-sm mb-0 text-white">
                                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                                    <span class="font-weight-bold ms-1">30 done</span> this month
                                </p>
                            </div>

                        </div>
                    </div>


                    <div class="card-body px-0">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-uppercase text-white font-weight-bolder">
                                            Invoice Code</th>
                                        <th scope="col" class="text-uppercase text-white  font-weight-bolder  ps-2">
                                            Email</th>
                                        <th scope="col"
                                            class="text-center text-uppercase text-white text-xxl font-weight-bolder ">
                                            Password</th>
                                        <th scope="col"
                                            class="text-center text-uppercase text-white text-xxl font-weight-bolder ">
                                            Nick Name</th>
                                        <th scope="col"
                                            class="text-center text-uppercase text-white text-xxl font-weight-bolder ">
                                            Status</th>
                                        <th scope="col"
                                            class="text-center text-uppercase text-white text-xxl font-weight-bolder ">
                                            Price</th>
                                        <th scope="col"
                                            class="text-center text-uppercase text-white text-xxl font-weight-bolder ">
                                            Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>
                                                <h6 class="text-white opacity-8 text-center">{{ $order->invoice_code }}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-white opacity-8 ">{{ $order->email }}</h6>
                                            </td>
                                            <td class="align-middle text-center ">
                                                <h6 class="text-white opacity-8 ">{{ $order->password }}</h6>
                                            </td>
                                            <td class="align-middle text-center ">
                                                <h6 class="text-white opacity-8 ">{{ $order->id_and_nick }}</h6>
                                            </td>
                                            @if ($order->status === 'paid')
                                                <td class="align-middle text-center ">
                                                    <h6 class="text-white badge bg-success">{{ $order->status }}</h6>
                                                </td>
                                            @else
                                                <td class="align-middle text-center ">
                                                    <h6 class="text-white badge bg-danger">{{ $order->status }}</h6>
                                                </td>
                                            @endif
                                            <td class="align-middle text-center ">
                                                <h6 class="text-white opacity-8 ">Rp.{{ $order->price }}</h6>
                                            </td>
                                            <td>
                                                <button type="button" class="badge bg-info" data-bs-toggle="modal"
                                                    data-bs-target="#detailModal{{ $order->id }}">
                                                    <span class="material-symbols-outlined">
                                                        visibility
                                                    </span>
                                                </button>
                                                <div class="modal fade" id="detailModal{{ $order->id }}" tabindex="-1"
                                                    aria-labelledby="detailModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="detailModalLabel">Detail Joki
                                                                    Rank</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <strong>ID Pesanan:</strong>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            {{ $order->invoice_code }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <strong>Email:</strong>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            {{ $order->email }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <strong>Bukti:</strong>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            <button class="btn btn-warning lihat-gambar-btn"
                                                                                data-target="{{ asset('storage/' . $order->image) }}">Lihat
                                                                                Gambar</button>
                                                                            <div class="gambar">
                                                                                <!-- The Close Button -->
                                                                                <span class="close">&times;</span>
                                                                                <!-- Modal Content (The Image) -->
                                                                                <img class="gambar-content" id="img01"
                                                                                    src="">
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <!-- Tambahkan kolom-kolom lainnya di sini -->
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Tutup</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <script>
        // Ambil semua tombol "Lihat Gambar" dengan kelas .lihat-gambar-btn
        // Ambil semua tombol "Lihat Gambar" dengan kelas .lihat-gambar-btn
        // Ambil semua tombol "Lihat Gambar" dengan kelas .lihat-gambar-btn
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
