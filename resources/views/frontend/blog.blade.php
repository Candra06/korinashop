<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kompres Korina</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('/') }}/assets/frontend/img/favicon.png" rel="icon">
    <link href="{{ url('/') }}/assets/frontend/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('/') }}/assets/frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/frontend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/frontend/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/frontend/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/frontend/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/frontend/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('/') }}/assets/frontend/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart - v1.1.1
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                {{-- <img src="assets/img/logo.png" alt=""> --}}
                <span>Kompres Korina</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{url('/')}}#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="{{url('/')}}#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="{{url('/')}}#portfolio">Produk</a></li>
                    <li><a class="nav-link scrollto" href="{{url('/')}}#recent-blog-posts">Blog</a></li>
                    <li><a class="nav-link scrollto" href="{{url('/')}}#contact">Kontak</a></li>
                    <li><a class="getstarted scrollto" href="{{url('/')}}#pemesanan">Pembelian</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{url('/')}}">Beranda</a></li>
                    <li>Blog</li>
                </ol>
                <h2>{{$data->judul}}</h2>

            </div>
        </section><!-- End Breadcrumbs -->
        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-12 entries">

                        <article class="entry entry-single">

                            <div class="entry-img">
                                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                {{$data->judul}}
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="blog-single.html">Admin</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                {!! $data->konten !!}

                            </div>

                            

                        </article><!-- End blog entry -->

                      
                    </div><!-- End blog entries list -->

                   

                </div>

            </div>
        </section><!-- End Blog Single Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">


        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">

                            <span>Kompres Korina</span>
                        </a>
                        <p>Solusi Tepat Untuk Mengatasi Demam dan Gejala Penyertanya</p>

                    </div>
                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Address</h4>
                        <p><strong>Universitas Jember</strong> <br>
                            Jl. Kalimantan Tegalboto No.37, Krajan Timur, Sumbersari, Kec. Sumbersari,1<br>
                            Kabupaten Jember, Jawa Timur 6812<br>


                        </p>

                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Phone</h4>
                        <a href="">Admin: 085850049091</a>
                        <a href="">Owner: 082140716397</a>
                    </div>


                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Email</h4>
                        <a href="kompresherbalkorina@gmail.com">kompresherbalkorina@gmail.com </a>

                    </div>



                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Kompres Korina</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="{{ url('/') }}">Warga Localhost</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ url('/') }}/assets/frontend/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="{{ url('/') }}/assets/frontend/vendor/aos/aos.js"></script>
    <script src="{{ url('/') }}/assets/frontend/vendor/php-email-form/validate.js"></script>
    <script src="{{ url('/') }}/assets/frontend/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ url('/') }}/assets/frontend/vendor/purecounter/purecounter.js"></script>
    <script src="{{ url('/') }}/assets/frontend/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ url('/') }}/assets/frontend/vendor/glightbox/js/glightbox.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('/') }}/assets/frontend/js/main.js"></script>

</body>

</html>
