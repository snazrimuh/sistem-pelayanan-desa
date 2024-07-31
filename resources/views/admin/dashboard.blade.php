<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pelayanan Desa Ngombakan</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/sukoharjo.png') }}" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Lumia
    * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
    * Updated: Mar 17 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    <style>
    .logo-text {
        font-size: 1.1rem;
        /* Adjust the font size as needed */
        font-weight: bold;
        /* Adjust the color as needed */
        position: relative;
    }

    .logo-text::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -5px;
        /* Adjust the distance from the text as needed */
        width: 100%;
        height: 3px;
        /* Adjust the thickness of the underline */
        background-color: #ffcc00;
        /* Adjust the underline color */
    }

    main {
        padding: 20px;
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Gaya untuk judul yang dianimasikan */
    .animated-titles h1,
    .animated-titles h2 {
        display: inline-block;
        opacity: 0;
        /* Mulai dari tidak terlihat */
        animation: fadeInUp 1s ease-out forwards;
        /* Menjalankan animasi */
    }

    /* Menambahkan sedikit delay antara animasi dua elemen */
    .animated-titles h1 {
        animation-delay: 0.3s;
    }

    .animated-titles h2 {
        animation-delay: 0.5s;
    }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo me-auto">
                <img src="{{ asset('assets/img/sukoharjo.png') }}" alt="logo" class="img-fluid"
                    style="max-height: 55px" />
                <span class="logo-text ms-1">Desa Ngombakan</span>
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto {{ Request::routeIs('admin.dashboard') ? 'active' : '' }}"
                            href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li><a class="nav-link scrollto {{ Request::routeIs('admin.pelayanan.index') ? 'active' : '' }}"
                            href="{{ route('admin.pelayanan.index') }}">Kelola Pelayanan</a></li>
                    <li class="nav-item ms-5">
                        <form action="{{ route('admin.logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger" style="border-radius: 50px">Logout</button>
                        </form>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="container text-center text-md-left" data-aos="fade-up">
            <div class="animated-titles">
                <h1>Selamat Datang Admin</h1>
            </div>
            <div class="animated-titles">
                <h2>Desa Ngombakan Kecamatan Polokarto Kabupaten Sukoharjo</h2>
            </div>
            <a href="{{ route('admin.pelayanan.index') }}" class="btn-get-started scrollto"
                style="border-radius: 50px">Kelola Pelayanan</a>
        </div>
    </section><!-- End Hero -->

    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <div style="display: flex; align-items: center;" class="mb-2">
                            <img src="{{ asset('assets/img/sukoharjo.png') }}" alt="logo" class="img-fluid"
                                style="max-height: 45px;" />
                            <div style="margin-left: 10px;">
                                <span><strong>Desa Ngombakan</strong></span><br>
                                <span><strong>Kabupaten Sukoharjo</strong></span>
                            </div>
                        </div>
                        <p>
                            Desa Ngombakan, Kec. Polokarto, <br>Kabupaten Sukoharjo, Jawa Tengah <br>57555<br><br>
                            <strong>Phone:</strong> (0271) 610014<br>
                            <strong>Email:</strong> pemerintahdesangombakan@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Link Terkait</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a
                                    href="https://ngombakan-sukoharjo.desa.id/berita">Berita Desa</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a
                                    href="https://ngombakan-sukoharjo.desa.id/ppid">PPID</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://ngombakan-sukoharjo.desa.id">Desa
                                    Ngombakan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a
                                    href="https://polokarto.sukoharjokab.go.id/">Kecamatan Polokarto</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://portal.sukoharjokab.go.id/">Pemkab
                                    Sukoharjo</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Jadwal Pelayanan</h4>
                        <p>Senin s/d Kamis : 07.30 - 15.00 WIB</p>
                        <p>Jum'at : 07.30 - 11.00 WIB</p>
                        <p> Sabtu : Libur</p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Aplikasi Desa</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Perpustakaan Desa</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Absen Perangkat Desa</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Cepat Tanggap</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Hak Cipta 2024 Desa Ngombakan | Kabupaten Sukoharjo
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/lumia-bootstrap-business-template/ -->
                    Designed by KKN 239 UNS 2024
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
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