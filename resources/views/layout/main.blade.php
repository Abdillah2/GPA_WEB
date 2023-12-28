<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Grha Prima Agung</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon1.png') }}" rel="icon" />
    <link href="{{ asset('assets/img/apple-touch-icon1.png') }}" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Arsha
  * Updated: Aug 30 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
        .logo img {
            max-width: 50px;
            /* Sesuaikan ukuran gambar sesuai kebutuhan */
            margin-right: 10px;
            /* Sesuaikan margin antara gambar dan teks */
        }

        .icon-box p.smaller-text {
            font-size: 14px;
            /* Sesuaikan dengan ukuran yang diinginkan */
        }
    </style>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <div class="logo">
          <img src="{{ asset('assets/img/gpanew1.png') }}" alt="" srcset="" />
        </div>
        {{-- <img src="assets/img/logo.png" alt="" > --}}
        <h1 class="logo me-auto"><a href="/">GPA</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto {{ $page == 'dashboard' ? 'active' : '' }}" href="/">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="{{ $page == 'service' ? 'active' : '' }}" class="active"><span>
                                Service</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('/telco') }}">Telecomunication</a></li>
                            <li><a href="{{ url('/nontelco') }}">Building Construction</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto {{ $page == 'product' ? 'active' : '' }}"
                            href="{{ url('/product') }}">Product</a></li>
                    <li><a class="nav-link scrollto {{ $page == 'ourclient' ? 'active' : '' }}"
                            href="{{ url('/ourclients') }}">Our Client</a></li>
                    <li><a class="nav-link scrollto {{ $page == 'contact' ? 'active' : '' }}"
                            href="{{ url('/contact') }}">Contact</a></li>
                    {{-- <li><a class="nav-link scrollto" href="#">About</a></li> --}}

                    <li class="dropdown">
                        <a href="#" class="{{ $page == 'about' ? 'active' : '' }}" class="active"><span>
                                About</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('/about') }}">About GPA</a></li>
                            <li><a href="{{ url('/recent-project') }}">Recent Project</a></li>
                            <li><a href="{{ url('/hse') }}">HSE</a></li>
                            <li><a href="{{ url('/career') }}">Career</a></li>
                            <li><a href="{{ url('/experience') }}">Experience</a></li>
                            <li><a href="{{ url('/reward') }}">Rewards</a></li>
                            <li><a href="{{ url('/news') }}">News</a></li>
                        </ul>
                    </li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->



    {{-- bagian konten --}}
    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h3>GPA</h3>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h3>Our Address</h3>
                        <p>
                            Menara Centennial, Lantai 29, Kav. 24-25 Unit D-E,<br />
                            Jl. Jenderal Gatot Subroto, No. 27, <br />
                            DKI Jakarta – Indonesia <br /><br />
                            {{-- <strong>Phone:</strong> 0821 1311 9124 || 0858 8606 4881<br /> --}}
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h3>OPENING HOURS</h3>
                        <p>
                            Indonesia Office: Jakarta, Bogor, Cikarang, Papua.<br />
                            Mondays-Fridays: 9AM to 7PM <br />
                            Saturdays-Sundays: Closed<br /><br />
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>GPA</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer>
    <!-- End Footer -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    {{-- <script src="assets/vendor/aos/aos.js"></script> --}}
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
