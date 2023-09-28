@extends('layouts.main')
@section('container')
    <section id="invoice">

        <div class="container">
            <div class="row justify-content-center" style="padding-top:8rem">
                <div class="col-md-8 invoice-wrapper text-dark">

                    <div class="header-invoice">
                        <h1>Lakukan Pembayaran Sebelum:</h1>
                        <h1 class="text-danger fw-bold fs-5" id="paymentExpiry">{{ substr($customer->payment_expiry, 11, 8) }}
                            WIB</h1>


                    </div>

                    <div class="invoice-content mt-3">
                        <div class="col-md-5 col-6">
                            <h6>Nomor Invoice</h6>
                        </div>

                        <div class="col-md-4 d-flex postion-relative">

                            <h6>{{ $customer->invoice_code }}</h6>
                            <button type="button" class="btn bg-transparent text-white" id="liveToastBtn">
                                <i class='bx bxs-copy -mt-5 fs-5'></i>

                            </button>

                            <div class="toast-container position-fixed bottom-0 end-0 p-3">
                                <div class="toast align-items-center text-bg-info" role="alert" aria-live="assertive"
                                    id="liveToast" aria-atomic="true">
                                    <div class="d-flex">
                                        <div class="toast-body">
                                            Copied code to clipboard!
                                        </div>
                                        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"
                                            aria-label="Close"></button>
                                    </div>
                                </div>
                            </div>
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
                            <h6 class="data-akun">**Data Protected**</h6>
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
                            <h6>RP.{{ number_format($customer->price, 0, '.', '.') }}</h6>

                        </div>
                    </div>
                    <form action="/proccess/orderan/transaksi/{{ $customer->invoice_code }}" method="post"
                        enctype="multipart/form-data" id="transaksi">
                        @csrf
                        <div class="invoice-content mt-3">
                            <div class="col-md-5 col-6">
                                <h6>Bukti Pembayaran</h6>
                            </div>
                            <div class="col-md-7">
                                <input type="hidden" id="id_pesanan" name="id_pesanan"
                                    value="{{ $customer->invoice_code }}">
                                <div class="file-input-container">
                                    <input type="file" id="image" name="image" onchange="previewImage()"
                                        oninput="checkForm()">
                                    <label for="image" class="label-img">Upload Bukti</label>
                                </div>
                                <img class="img-fluid img-preview" id="img-preview" src="">
                            </div>
                        </div>
                        <button class="btn-submit my-4 disabled btn " style="border:1px solid goldenrod" id="btn-submit">
                            <p>Submit</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path
                                    d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z">
                                </path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </section>



    <script>
        // Dapatkan elemen dengan id "paymentExpiry"

        // Dapatkan elemen ikon "copy"
        const copyIcon = document.getElementById('liveToastBtn');
        const toastLiveExample = document.getElementById("liveToast");


        // Tambahkan event listener untuk mengklik ikon "copy"
        copyIcon.addEventListener('click', function() {
            // Dapatkan teks dari elemen h6 yang terkait
            const h6Text = this.previousElementSibling
                .textContent; // Menggunakan "this" untuk merujuk ke ikon yang diklik

            // Buat elemen textarea sementara untuk menyalin teks
            const textArea = document.createElement('textarea');
            textArea.value = h6Text;

            // Tambahkan elemen textarea ke dokumen
            document.body.appendChild(textArea);

            // Pilih teks dalam textarea
            textArea.select();

            // Salin teks ke clipboard
            document.execCommand('copy');

            // Hapus elemen textarea sementara
            document.body.removeChild(textArea);

            // Tampilkan pesan atau lakukan tindakan lain jika diperlukan
            if (copyIcon) {
                const toastBootstrap =
                    bootstrap.Toast.getOrCreateInstance(toastLiveExample);
                copyIcon.addEventListener("click", () => {
                    toastBootstrap.show();
                });
            }

        });

        function previewImage() {
            const image = document.getElementById('image')
            const imgPreview = document.getElementById('img-preview')
            const button = document.querySelector('#btn-submit')
            imgPreview.style.display = "block";
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
                button.classList.remove('disabled');
            }
        }

        function checkForm() {
            const image = document.getElementById('image');
            const button = document.querySelector('#btn-submit');

            if (image.files.length > 0) {
                // Aktifkan tombol "Submit" jika ada file yang dipilih
                button.classList.remove('disabled');
            } else {
                // Nonaktifkan tombol "Submit" jika tidak ada file yang dipilih
                button.classList.add('disabled');
            }
        }
    </script>
@endsection
