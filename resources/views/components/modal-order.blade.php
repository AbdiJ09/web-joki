<div class="modal fade" id="exampleModal{{ $order->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content bg-gradient-light">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Orderan</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body text-start p-4">
                <div class="row justify-content-center  ">
                    <div class="col-md-6">

                        <div class="bg-gradient-dark text-white py-2 d-flex mb-3 shadow border-radius-md text-center">

                            <p class="m-auto"><strong>Invoice Code :</strong>
                                {{ $order->invoice_code }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="bg-gradient-dark text-white py-2 d-flex mb-3 shadow border-radius-md text-center">
                            <p class="m-auto"><strong>Email : </strong>{{ $order->email }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="bg-gradient-dark text-white py-2 d-flex mb-3 shadow border-radius-md text-center">
                            <p class="m-auto"><strong>Password : </strong>{{ $order->password }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="bg-gradient-dark text-white py-2 d-flex mb-3 shadow border-radius-md text-center">
                            <p class="m-auto"><strong>Order ID : </strong>{{ $order->id_and_nick }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="bg-gradient-dark text-white py-2 d-flex mb-3 shadow border-radius-md text-center">
                            <p class="m-auto"><strong>Login Via : </strong>{{ $order->login_via }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="bg-gradient-dark text-white py-2 d-flex mb-3 shadow border-radius-md text-center">
                            <p class="m-auto"><strong>Whatsapp : </strong>{{ $order->whatsapp }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="bg-gradient-dark text-white py-2 d-flex mb-3 shadow border-radius-md text-center">
                            <p class="m-auto"><strong>Status : </strong>{{ $order->status }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="bg-gradient-dark text-white py-2 d-flex mb-3 shadow border-radius-md text-center">
                            <p class="m-auto"><strong>Joki : </strong>{{ $order->select_joki }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="bg-gradient-dark text-white py-2 d-flex mb-3 shadow border-radius-md text-center">
                            <p class="m-auto"><strong>Star Order : </strong>{{ $order->star_order }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="bg-gradient-dark text-white py-2 d-flex mb-3 shadow border-radius-md text-center">
                            <p class="m-auto"><strong>Price : </strong>{{ $order->price }}</p>
                        </div>
                    </div>

                    <div class="bg-gradient-dark text-white py-2 d-flex mb-3 shadow border-radius-md text-center">
                        <button id="myImg{{ $order->id }}"
                            class="btn bg-gradient-secondary w-100 shadow-lg  fw-semibold text-white m-auto text-uppercase p-2"
                            data-target="{{ $order->image }}">
                            Bukti
                        </button>


                    </div>
                </div>
                <div id="myModal{{ $order->id }}">
                    <!-- Modal Content (The Image) -->
                    <img class="gambar-content" id="img01{{ $order->id }}" alt="">
                    <!-- Modal Caption (Image Text) -->
                    <div id="caption{{ $order->id }}"></div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Inside the loop -->
<script>
    $(document).ready(function() {
        $('#myImg{{ $order->id }}').click(function() {
            const imgSrc = $(this).data('target');

            $('#img01{{ $order->id }}').attr('src', imgSrc);

            $('#myModal{{ $order->id }}').show();
        });

        $('#myModal{{ $order->id }}').click(function() {
            $(this).hide();
        });
    });
</script>
