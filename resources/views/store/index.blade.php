@extends('layouts.main')

@section('content')
    <div class="wrapper-store">
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
        <div class="container-store mt-5">
            <div class="container mt-5">
                <div class="judul text-center">
                    <h1>Products</h1>
                </div>
                <div class="row" id="ads">
                    <!-- Category Card -->
                    <div class="col-md-4">
                        <div class="card rounded">
                            <div class="card-image">
                                <span class="card-notify-badge">Low KMS</span>
                                <span class="card-notify-year">2018</span>
                                <img class="img-fluid"
                                    src="https://imageonthefly.autodatadirect.com/images/?USER=eDealer&PW=edealer872&IMG=USC80HOC011A021001.jpg&width=440&height=262"
                                    alt="Alternate Text" />
                            </div>
                            <div class="card-image-overlay m-auto">
                                <span class="card-detail-badge">Used</span>
                                <span class="card-detail-badge">$28,000.00</span>
                                <span class="card-detail-badge">13000 Kms</span>
                            </div>
                            <div class="card-body text-center">
                                <div class="ad-title m-auto">
                                    <h5>Honda Accord LX</h5>
                                </div>
                                <a class="ad-btn" href="#">Buy now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card rounded">
                            <div class="card-image">
                                <span class="card-notify-badge">Fully-Loaded</span>
                                <span class="card-notify-year">2017</span>
                                <img class="img-fluid"
                                    src="https://imageonthefly.autodatadirect.com/images/?USER=eDealer&PW=edealer872&IMG=CAC80HOC021B121001.jpg&width=440&height=262"
                                    alt="Alternate Text" />
                            </div>
                            <div class="card-image-overlay m-auto">
                                <span class="card-detail-badge">Used</span>
                                <span class="card-detail-badge">$28,000.00</span>
                                <span class="card-detail-badge">13000 Kms</span>
                            </div>
                            <div class="card-body text-center">
                                <div class="ad-title m-auto">
                                    <h5>Honda CIVIC HATCHBACK LS</h5>
                                </div>
                                <a class="ad-btn" href="#">Buy now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card rounded">
                            <div class="card-image">
                                <span class="card-notify-badge">Price Reduced</span>
                                <span class="card-notify-year">2018</span>
                                <img class="img-fluid"
                                    src="https://imageonthefly.autodatadirect.com/images/?USER=eDealer&PW=edealer872&IMG=USC80HOC091A021001.jpg&width=440&height=262"
                                    alt="Alternate Text" />
                            </div>
                            <div class="card-image-overlay m-auto">
                                <span class="card-detail-badge">Used</span>
                                <span class="card-detail-badge">$22,000.00</span>
                                <span class="card-detail-badge">8000 Kms</span>
                            </div>
                            <div class="card-body text-center">
                                <div class="ad-title m-auto">
                                    <h5>Honda Accord Hybrid LT</h5>
                                </div>
                                <a class="ad-btn" href="#">Buy now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-store-2 mt-4">
                <div class="row" id="ads">
                    <!-- Category Card -->
                    <div class="col-md-4">
                        <div class="card rounded">
                            <div class="card-image">
                                <span class="card-notify-badge">Low KMS</span>
                                <span class="card-notify-year">2018</span>
                                <img class="img-fluid"
                                    src="https://imageonthefly.autodatadirect.com/images/?USER=eDealer&PW=edealer872&IMG=USC80HOC011A021001.jpg&width=440&height=262"
                                    alt="Alternate Text" />
                            </div>
                            <div class="card-image-overlay m-auto">
                                <span class="card-detail-badge">Used</span>
                                <span class="card-detail-badge">$28,000.00</span>
                                <span class="card-detail-badge">13000 Kms</span>
                            </div>
                            <div class="card-body text-center">
                                <div class="ad-title m-auto">
                                    <h5>Honda Accord LX</h5>
                                </div>
                                <a class="ad-btn" href="#">Buy now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card rounded">
                            <div class="card-image">
                                <span class="card-notify-badge">Fully-Loaded</span>
                                <span class="card-notify-year">2017</span>
                                <img class="img-fluid"
                                    src="https://imageonthefly.autodatadirect.com/images/?USER=eDealer&PW=edealer872&IMG=CAC80HOC021B121001.jpg&width=440&height=262"
                                    alt="Alternate Text" />
                            </div>
                            <div class="card-image-overlay m-auto">
                                <span class="card-detail-badge">Used</span>
                                <span class="card-detail-badge">$28,000.00</span>
                                <span class="card-detail-badge">13000 Kms</span>
                            </div>
                            <div class="card-body text-center">
                                <div class="ad-title m-auto">
                                    <h5>Honda CIVIC HATCHBACK LS</h5>
                                </div>
                                <a class="ad-btn" href="#">Buy now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card rounded">
                            <div class="card-image">
                                <span class="card-notify-badge">Price Reduced</span>
                                <span class="card-notify-year">2018</span>
                                <img class="img-fluid"
                                    src="https://imageonthefly.autodatadirect.com/images/?USER=eDealer&PW=edealer872&IMG=USC80HOC091A021001.jpg&width=440&height=262"
                                    alt="Alternate Text" />
                            </div>
                            <div class="card-image-overlay m-auto">
                                <span class="card-detail-badge">Used</span>
                                <span class="card-detail-badge">$22,000.00</span>
                                <span class="card-detail-badge">8000 Kms</span>
                            </div>
                            <div class="card-body text-center">
                                <div class="ad-title m-auto">
                                    <h5>Honda Accord Hybrid LT</h5>
                                </div>
                                <a class="ad-btn" href="#">Buy now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection
