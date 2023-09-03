 <div class="order" id="order">
     <div class="container">
         <h1 class="text-center">Service</h1>
         <div class="row">
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

         </div>
     </div>
 </div>
