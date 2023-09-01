@extends('layouts.main')
@section('container')
    <section id="home">
        <div class="container">
            <div class="row ">
                <div class="col-md-5 position-relative">
                    <h1 class="home-text text-white fw-semibold ">Welcome To AJ <span style="color: gold"
                            class="fw-bold store">STORE</span></h1>
                    <p class="fs-5 text-white-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat
                        exercitationem esse fugit, facilis ex voluptatum?</p>
                    <div class="btn-groups">

                        <a href="#order" class="link-light"><button class="btn btn1 fw-semibold"> Click To Move
                            </button></a>

                    </div>
                </div>

                <div class="col-md-6">
                    <img src="/img/betrik.png" alt="Gambar" class="img-fluid betrik-home">
                </div>
                <div class="col-md-1 col-4 kolom-3">
                    <div class="text-center">
                        <h3 class="fw-bold" style="color: gold">SAFE</h3>
                        <div class="counter mb-3 text-white-50">0</div>
                    </div>

                    <div class="text-center">
                        <h3 class="fw-bold" style="color: gold">FAST</h3>
                        <div class="counter-fast mb-3 text-white-50">0</div>
                    </div>

                    <div class="text-center">
                        <h3 class="fw-bold" style="color: gold">Trusted</h3>
                        <div class="counter-trust mb-3 text-white-50">0</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
