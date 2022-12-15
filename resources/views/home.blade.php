@extends('layouts.main')

@section('content')
    {{-- Content Top --}}
    <div data-aos="fade-up" class="wrap-content-top d-flex flex-column" style="height: 90vh;">
        <div class="wrap-content-img">
            <img class="" src="{{ url('Images/Banner1.png') }}" alt="">
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
