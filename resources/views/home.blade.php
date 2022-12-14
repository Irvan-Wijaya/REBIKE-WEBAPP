@extends('layouts.main')

@section('content')
    {{-- Content Top --}}
    <div data-aos="fade-up" class="wrap-content-top d-flex flex-column" style="height: 70vh; margin-left: -100px;">
        <div class="wrap-content-img " style="border-radius: 30px">
            <img src="{{ url('Images/bannerhome.jpg') }}" alt="">
        </div>
        <div class="wrap-content-text fw-bold fs-3 position-absolute p-5 mt-5">
            Hello! <br>
            Welcome to REBIKE
            <br><br>
            The place where you <br>
            fix your bike.
        </div>
    </div>

    {{-- Content Bottom --}}
    <div data-aos="fade-up" class="wrap-content-bottom" style="height: 100vh">
        <div class="wrap-content-bottom-title fw-bold fs-3">
            Easy steps <br>
            call a mechanic
        </div>
        <div class="wrap-content-bottom-container d-flex justify-content-between align-items-center">
            <img src="{{ url('Images/steps1.png') }}" alt="">
            <img src="{{ url('Images/steps2.png') }}" alt="">
            <img style="margin-bottom: 40px" src="{{ url('Images/steps3.png') }}" alt="">
        </div>
    </div>
@endsection
