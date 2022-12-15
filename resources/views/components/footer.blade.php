<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body>
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-white text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="https://www.facebook.com/profile.php?id=100087640269431" class="me-4 link-secondary text-decoration-none">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com/rebike.business/" class="me-4 link-secondary text-decoration-none">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 link-secondary text-decoration-none">
                    <i class="fa-brands fa-youtube"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="me-3 text-secondary">REBIKE</i>
                        </h6>
                        <p>
                            Repairing your bike shouldn't be difficult
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Store</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Reservation</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="{{ url('about-us') }}" class="text-reset">About Us</a>
                        </p>
                        <p>
                            <a href="{{ url('faq') }}" class="text-reset">FAQ</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3 text-secondary"></i> Alam Sutera, Tangerang, Banten</p>
                        <p>
                            <i class="fas fa-envelope me-3 text-secondary"></i>
                            rebike.business@gmail.com
                        </p>
                        <p><i class="fas fa-phone me-3 text-secondary"></i> +62 812-0000-0000</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
            © 2022 Copyright:
            <a class="text-reset fw-bold" href="#">Kelompok 5</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <script src="https://kit.fontawesome.com/d57a7b65e5.js" crossorigin="anonymous"></script>
</body>

</html>
