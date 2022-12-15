@extends('layouts.main')

@section('content')
    <div class="wrapper-about-us">
        <div data-aos="fade-up" class="wrapper-top d-flex align-items-center" style="height: 100vh">
            {{-- Right Text --}}
            <div class="wrapper-right">
                <div class="about-us-tt">
                    <div class="about-us-title fs-1 fw-bold mb-5">
                        About Us <br>
                    </div>
                    <div class="about-us-text w-50 mb-5">
                        An application where bicycle users (users) can call professional bicycle mechanics to the user's
                        home to repair damaged bicycles.
                    </div>
                </div>
                <a href="#next">
                    <button type="button" class="btn btn-primary btn-lg">Learn More</button>
                </a>

            </div>
            {{-- Content Left --}}
            <div class="wrapper-left">
                <img src="{{ url('Images/content-img.png', []) }}" alt="">
            </div>
        </div>

        {{-- Content Bottom --}}
        <h1 id="next"></h1>
        <h1 data-aos="fade-up" class="fw-bold pt-5">Our Services</h1>
        <div data-aos="fade-up" class="content-bottom d-flex justify-content-between" style="height: 50vh">
            <div class="card" style="width: 18rem; border: none;">
                <lord-icon src="https://cdn.lordicon.com/mdgrhyca.json" trigger="loop" delay="1500"
                    colors="primary:#37b6ff,secondary:#08a88a" style="width:250px;height:250px">
                </lord-icon>
                <div class="card-body">
                    <p class="card-text ms-5">
                        5 Star Service
                    </p>
                </div>
            </div>

            <div class="card" style="width: 18rem; border: none;">
                <lord-icon src="https://cdn.lordicon.com/kbtmbyzy.json" trigger="hover"
                    colors="primary:#121331,secondary:#37b6ff" style="width:250px;height:250px">
                </lord-icon>
                <div class="card-body">
                    <p class="card-text ms-5">
                        24 Hours Service
                    </p>
                </div>
            </div>

            <div class="card" style="width: 18rem; border: none;">
                <lord-icon src="https://cdn.lordicon.com/zpxybbhl.json" trigger="loop"
                    colors="primary:#121331,secondary:#37b6ff" style="width:250px;height:250px">
                </lord-icon>
                <div class="card-body">
                    <p class="card-text ms-3">
                        24 Hours Consultations
                    </p>
                </div>
            </div>
        </div>

        {{-- Team --}}
        <div class="team">
            <div class="wrapper-team d-flex flex-column align-items-center justify-content-center" style="height: 100vh">
                <h1 data-aos="fade-up" class="fw-bold mt-5">Our Teams</h1>
                <div data-aos="fade-up" class="d-flex justify-content-between align-items-center" style="height: 50vh">
                    <div class="card" style="width: 18rem; border: none;">
                        <lord-icon src="https://cdn.lordicon.com/nobciafz.json" trigger="loop" delay="2000"
                            colors="primary:#121331,secondary:#37b6ff" style="width:250px;height:250px">
                        </lord-icon>
                        <div class="card-body">
                            <p class="card-text ms-2">
                                Aradhana Indra Daniswara
                            </p>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem; border: none;">
                        <lord-icon src="https://cdn.lordicon.com/nobciafz.json" trigger="loop" delay="2000"
                            colors="primary:#121331,secondary:#37b6ff" style="width:250px;height:250px">
                        </lord-icon>
                        <div class="card-body">
                            <p class="card-text" style="margin-left: 65px">
                                Irvan Wijaya
                            </p>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem; border: none;">
                        <lord-icon src="https://cdn.lordicon.com/nobciafz.json" trigger="loop" delay="2000"
                            colors="primary:#121331,secondary:#37b6ff" style="width:250px;height:250px">
                        </lord-icon>
                        <div class="card-body">
                            <p class="card-text" style="margin-left: 60px">
                                Jasson Laurent
                            </p>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem; border: none;">
                        <lord-icon src="https://cdn.lordicon.com/nobciafz.json" trigger="loop" delay="2000"
                            colors="primary:#121331,secondary:#37b6ff" style="width:250px;height:250px">
                        </lord-icon>
                        <div class="card-body">
                            <p class="card-text ms-2">
                                Vincentius Marco Melandri
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
