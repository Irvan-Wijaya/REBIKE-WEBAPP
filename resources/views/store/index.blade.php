@extends('layouts.main')

@section('content')
    <div data-aos="fade-up" class="wrapper-store">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src={{ asset('Images/bannerStore.png') }} class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src={{ asset('Images/bannerStore2.png') }} class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src={{ asset('Images/bannerStore3.png') }} class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <section data-aos="fade-up">
        <div class="container py-5">
            <div class="row justify-content-center">
                {{-- Card 1 --}}
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card" style="border-radius: 15px;">
                        {{-- Image --}}
                        <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <img src="{{ asset('Images/bannerStore.png') }}"
                                style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"
                                alt="Laptop" />
                            <a href="#!">
                                <div class="mask"></div>
                            </a>
                        </div>
                        {{-- Title --}}
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p><a href="#!" class="text-dark">TREK Roadbike</a></p>
                                    <p class="small text-muted">Roadbike, Perfomance</p>
                                </div>
                                {{-- Rating --}}
                                <div>
                                    <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p class="small text-muted">Rated 5.0/5</p>
                                </div>
                            </div>
                        </div>
                        <hr class="my-0" />
                        {{-- Price --}}
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                                <p><a href="#!" class="text-dark">$9,900</a></p>
                                <p class="text-dark">#R001</p>
                            </div>
                            <p class="small text-muted">VISA Platinum</p>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                                <a href="">
                                    <button type="button" class="btn btn-primary">Buy now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card" style="border-radius: 15px;">
                        {{-- Image --}}
                        <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <img src="{{ asset('Images/bannerStore2.png') }}"
                                style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"
                                alt="Laptop" />
                            <a href="#!">
                                <div class="mask"></div>
                            </a>
                        </div>
                        {{-- Title --}}
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p><a href="#!" class="text-dark">TREK Mountain Bike</a></p>
                                    <p class="small text-muted">Mountain Bike, Extreme</p>
                                </div>
                                {{-- Rating --}}
                                <div>
                                    <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p class="small text-muted">Rated 5.0/5</p>
                                </div>
                            </div>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body pb-0">
                            {{-- Price --}}
                            <div class="d-flex justify-content-between">
                                <p><a href="#!" class="text-dark">$4,180</a></p>
                                <p class="text-dark">#M001</p>
                            </div>
                            <p class="small text-muted">VISA Platinum</p>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                                <a href="">
                                    <button type="button" class="btn btn-primary">Buy now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card" style="border-radius: 15px;">
                        {{-- Image --}}
                        <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <img src="{{ asset('Images/bannerStore3.png') }}"
                                style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"
                                alt="Laptop" />
                            <a href="#!">
                                <div class="mask"></div>
                            </a>
                        </div>
                        {{-- Title --}}
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p><a href="#!" class="text-dark">TREK Touring Bike</a></p>
                                    <p class="small text-muted">Touring Bike, Extreme</p>
                                </div>
                                {{-- Rating --}}
                                <div>
                                    <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p class="small text-muted">Rated 5.0/5</p>
                                </div>
                            </div>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body pb-0">
                            {{-- Price --}}
                            <div class="d-flex justify-content-between">
                                <p><a href="#!" class="text-dark">$4,270</a></p>
                                <p class="text-dark">#T001</p>
                            </div>
                            <p class="small text-muted">VISA Platinum</p>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                                <a href="">
                                    <button type="button" class="btn btn-primary">Buy now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
