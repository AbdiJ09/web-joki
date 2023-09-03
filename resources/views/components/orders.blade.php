 <div class="order" id="order">
     <div class="container">
         <h1 class="text-center">Service</h1>
         <div class="row">
<<<<<<< HEAD
            <div class="col-md-4 col-sm-6">
                <div class="img-area shadow-lg rounded-3">
                    <img src="/img/betrik2.jpg" alt="">
                    <div class="img-text">
                        <h3 class="fs-6 fw-semibold">Joki Classic(Up Winrate)</h3>
                        <h5 class="fs-6">Mobile Legends</h5>
                        <a href="/order/joki-classic"><button class="btn btn-warning fw-semibold text-white text-uppercase px-3 py-0">Order</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="img-area shadow-lg rounded-3">
                    <img src="/img/aldos.jpg" alt="">
                    <div class="img-text">
                        <h3 class="fs-6 fw-semibold">Joki Rank</h3>
                        <h5 class="fs-6">Mobile Legends</h5>
                        <a href="/order/joki-rank"><button class="btn btn-warning fw-semibold text-white text-uppercase px-3 py-0">Order</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="img-area shadow-lg rounded-3">
                    <img src="/img/roger.webp" alt="">
                    <div class="img-text">
                        <h3 class="fs-6 fw-semibold">Joki Gendong(Ranked / Classic)</h3>
                        <h5 class="fs-6">Mobile Legends</h5>
                        <a href="/order/joki-gendong"><button class="btn btn-warning fw-semibold text-white text-uppercase px-3 py-0">Order</button></a>
                    </div>
                </div>
            </div>
=======
             @foreach ($services as $service)
                 <div class="col-md-4 col-sm-6">
                     <div class="img-area shadow-lg rounded-3 my-2">
                         <img src="/img/{{ $service->gambar }}" alt="">
                         <div class="img-text">
                             <h3 class="fs-5">{{ $service->name }}</h3>
                             <h5>Mobile Legends</h5>
                             <a href="/service/{{ $service->slug }}"><button
                                     class="btn btn-warning fw-semibold">Order</button></a>
                         </div>
                     </div>
                 </div>
             @endforeach

>>>>>>> 5298ccd99e3891bbac9f0672cdede482ebf4d8c0
         </div>
     </div>
 </div>
