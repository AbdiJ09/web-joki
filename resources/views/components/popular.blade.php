<section id="popular" class="pt-5 mt-5">
    <div class="container">
        <div class="text-popular col-lg-4">

            <h1 class="fw-bold mb-4 text-center rounded-3 p-2 mt-2" style="color: gold">🔱POPULAR🔱</h1>
        </div>
        <div class="row">
            @foreach ($popularServices as $p)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="img-area shadow-lg rounded-3">
                        <img src="/img/{{ $p->gambar }}" alt="">
                        <div class="img-text">
                            <h3 class="fs-6 fw-semibold">{{ $p->name }}</h3>
                            <h5 class="fs-6">Mobile Legends</h5>
                            <a href="/order/joki-rank"><button
                                    class="btn btn-warning fw-semibold text-white text-uppercase px-3 py-0">Order</button></a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section>
