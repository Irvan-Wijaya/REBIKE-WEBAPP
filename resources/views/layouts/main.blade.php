<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Trix Editor --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    @vite(['resources/sass/app.scss'])
    <title>REBIKE</title>
</head>

<body>
    @include('components.navbar')
    <div class="container my-5">
        @yield('content')
        {{-- Content Top --}}
        <div data-aos="fade-up" class="wrap-content-top d-flex justify-content-between align-items-center" style="height: 100vh">
            <div class="wrap-content-text fw-bold fs-3">
                Hello! <br>
                Welcome to REBIKE
                <br><br>
                The place where you fix your bike.
            </div>
            <div class="wrap-content-img">
                <img src="{{ url('Images/content-img.png') }}" alt="">
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
    </div>
    @include('components.footer')
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
