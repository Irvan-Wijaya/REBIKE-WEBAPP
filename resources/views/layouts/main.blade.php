<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Trix Editor --}}
    <link rel="icon" type="image/x-icon" href="{{ url('Images/Favicon.png') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    @vite(['resources/sass/app.scss'])
    @yield('extra')
    <title>REBIKE</title>
</head>

<body>
    <div id="preloader">
        <div id="loader"></div>
    </div>
    @include('components.navbar')
    <div class="container my-5">
        @yield('content')
    </div>
    @include('components.footer')
    <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();

        var loader = document.getElementById('preloader');

        window.addEventListener("load", function() {
            loader.style.display = "none";
        }, 10000);
    </script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
