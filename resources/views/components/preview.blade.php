 <section class="preview" id="preview">

     <div class="swiper mySwiper">
         <div class="swiper-wrapper">
             @for ($i = 0; $i < 15; $i++)
                 <div class="swiper-slide">
                     <div class="swiper-header"></div>
                     <div class="testimoni mt-4">
                         <div class="testimoni-header row justify-content-center">
                             <div class="col-md-4 col-4">

                                 <img src="/img/freya.jpg" width="100" height="100"
                                     class="border border-white rounded-circle" alt="">
                             </div>
                             <div class="col-md-8 col-8">

                                 <h3 class="text-white fw-bold">JOKI RANK</h3>
                                 <h2>20 Star Mytic</h2>
                                 <p>22 maret 2023</p>
                             </div>
                         </div>
                         <div class="d-flex justify-content-center">

                             <i class="bi bi-star-fill"></i>
                             <i class="bi bi-star-fill"></i>
                             <i class="bi bi-star-fill"></i>
                             <i class="bi bi-star-fill"></i>
                             <i class="bi bi-star-fill"></i>
                         </div>
                         <div class="ulasan-wrapper text-start mx-3" style="margin-top: -30px">
                             <p class="text-white fw-semibold" style="margin-bottom: 1px">Ulasan:</p>
                             <div class="ulasan border border-3 rounded-2 border-white p-2">

                                 <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt,
                                     explicabo!</p>
                             </div>
                             <div class="d-flex justify-content-center  align-items-center my-4 flex-wrap">
                                 <div class="grade  me-3 border border-3 border-white  rounded-1 px-1">
                                     Tepat Waktu
                                 </div>
                                 <div class="grade  me-3 border-3 border border-white  rounded-1 px-2">
                                     Terbaik
                                 </div>
                                 <div class="grade  me-3 border-3 border border-white  rounded-1 px-2">
                                     Terpercaya
                                 </div>



                             </div>
                         </div>
                         <h5 class="text-center py-4" style="margin-top: -20px">@AJ</h5>

                     </div>
                     <div class="swiper-footer">
                         <img src="/img/shape.png" class="position-absolute w-100 bottom-0 " alt="">
                     </div>
                 </div>
             @endfor



         </div>
         <div class="swiper-pagination"></div>
     </div>
 </section>
