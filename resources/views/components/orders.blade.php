<div class="order" id="order">
    <div class="container">
        <h1 class="text-center">Service</h1>
        <div class="row">
            @foreach ($services as $service)
                <div class="col-md-4 col-sm-6 mb-4 services">
                    <div class="img-area shadow-lg rounded-3">
                        <img src="/img/{{ $service->gambar }}" alt="">
                        <div class="img-text">
                            <h3 class="fs-6 fw-semibold">{{ $service->name }}</h3>
                            <h5 class="fs-6">Mobile Legends</h5>
                            <a href="{{ route('service.show', ['service' => $service->slug]) }} "><button
                                    class="btn btn-warning fw-semibold text-white text-uppercase px-3 py-0">Order</button></a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
