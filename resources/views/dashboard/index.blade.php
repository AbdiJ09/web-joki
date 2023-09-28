@extends('dashboard.layout.main')
@section('users')
    <div class="container-fluid pt-5 mt-5">
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
        <h1 class="text-white">Welcome Back {{ Auth::user()->name }}</h1>
    </div>
@endsection