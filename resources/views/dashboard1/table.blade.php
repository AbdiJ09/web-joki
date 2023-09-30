<div class="table-responsive">

    <table class="table align-items-center mb-0">
        <caption></caption>
        <thead>
            <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    Account</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Nick Name</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    Login</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    Whatsapp</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    Tanggal Order</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($orderRank as $order)
                <tr>
                    <td>
                        <div class="d-flex px-2 py-1">

                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-xs">{{ $order->email }}</h6>
                                <p class="text-xs text-secondary mb-0">{{ $order->password }}</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $order->id_and_nick }}</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <p>{{ $order->login_via }}</p>
                    </td>
                    <td class="align-middle text-center">
                        <p>{{ $order->whatsapp }}</p>

                    </td>
                    <td class="align-middle text-center">
                        <p>{{ $order->created_at->format('d M Y') }}</p>

                    </td>
                    <td class="align-middle text-center">
                        <div
                            class="bg-gradient-info icon-sm icon-shape shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <button type="button" class="bg-transparent border-0" data-bs-toggle="modal"
                                data-bs-target="#exampleModal{{ $order->id }}">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                                </svg>
                            </button>




                        </div>
                        <div class="modal fade" id="exampleModal{{ $order->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content bg-gradient-light">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Detail Orderan</h5>
                                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-start p-4">
                                        <div
                                            class="bg-gradient-dark text-white py-2 d-flex mb-3 shadow border-radius-md text-center">

                                            <p class="m-auto"><strong>Invoice Code :</strong>
                                                {{ $order->invoice_code }}
                                            </p>
                                        </div>
                                        <div
                                            class="bg-gradient-dark text-white py-2 d-flex mb-3 shadow border-radius-md text-center">
                                            <p class="m-auto"><strong>Email : </strong>{{ $order->email }}</p>
                                        </div>
                                        <div
                                            class="bg-gradient-dark text-white py-2 d-flex mb-3 shadow border-radius-md text-center">
                                            <p class="m-auto"><strong>Password : </strong>{{ $order->password }}</p>
                                        </div>
                                        <div
                                            class="bg-gradient-dark text-white py-2 d-flex mb-3 shadow border-radius-md text-center">
                                            <p class="m-auto"><strong>Order ID : </strong>{{ $order->id_and_nick }}</p>
                                        </div>
                                        <div
                                            class="bg-gradient-dark text-white py-2 d-flex mb-3 shadow border-radius-md text-center">
                                            <p class="m-auto"><strong>Login Via : </strong>{{ $order->login_via }}</p>
                                        </div>
                                        <div
                                            class="bg-gradient-dark text-white py-2 d-flex mb-3 shadow border-radius-md text-center">
                                            <p class="m-auto"><strong>Whatsapp : </strong>{{ $order->whatsapp }}</p>
                                        </div>
                                        <div
                                            class="bg-gradient-dark text-white py-2 d-flex mb-3 shadow border-radius-md text-center">
                                            <p class="m-auto"><strong>Status : </strong>{{ $order->status }}</p>
                                        </div>
                                        <div
                                            class="bg-gradient-dark text-white py-2 d-flex mb-3 shadow border-radius-md text-center">
                                            <p class="m-auto"><strong>Joki : </strong>{{ $order->select_joki }}</p>
                                        </div>
                                        <div
                                            class="bg-gradient-dark text-white py-2 d-flex mb-3 shadow border-radius-md text-center">
                                            <p class="m-auto"><strong>Star Order : </strong>{{ $order->star_order }}
                                            </p>
                                        </div>
                                        <div
                                            class="bg-gradient-dark text-white py-2 d-flex mb-3 shadow border-radius-md text-center">
                                            <p class="m-auto"><strong>Price : </strong>{{ $order->price }}</p>
                                        </div>
                                        <div
                                            class="bg-gradient-dark text-white py-2 d-flex mb-3 shadow border-radius-md text-center">
                                            <button class="btn btn-light m-auto" data-bs-toggle="modal"
                                                data-bs-target="#bukti">Bukti</button>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn bg-gradient-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn bg-gradient-dark">Save changes</button>
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
