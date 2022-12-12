<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-light">
        <div class="nv container-fluid">
            <a class="navbar-brand ms-2" href="#">
                <img src="{{ url('/Images/REBIKE_LOGO.png') }}" alt="" width="100" height="40">
            </a>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link text-dark fw-bolder" id="active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-bold" href="#">Reservation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-bold" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-bold" href="#">Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-bold" href="#">FAQ</a>
                </li>
            </ul>
            <div class="d-grid gap-2 d-md-block">
                <button id="log" class="btnn btn btn-primary fw-bold" type="button">Log in</button>
                <button id="sign" class="btnn btn btn-primary fw-bold" type="button">Sign in</button>
            </div>
        </div>
    </nav>
</body>

</html>
