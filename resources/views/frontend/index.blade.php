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
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Produk</a></li>
                    <li><a class="nav-link scrollto" href="#recent-blog-posts">Blog</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                    <li><a class="getstarted scrollto" href="#pemesanan">Pembelian</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center justify-content-center">
        <div class="container justify-content-center ">
            <div class="row ">
                <div class="col-md-12 mb-3 text-center">
                    <h1 data-aos="fade-up">Kompres Korina</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Solusi Tepat Untuk Mengatasi Demam dan Gejala
                        Penyertanya</h2>
                </div>


            </div>
        </div>
        <div class="layer"></div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h2>Tentang</h2>
                </header>
                <div class="row gx-0">

                    <div class="col-lg-12 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">

                            <p>
                                KORINA merupakan local brand yang dirintis oleh tim PKM-K Universitas Jember untuk
                                mengikuti PKM yang diselenggarakan oleh DIKTI pada tahun 2021. KORINA adalah label dari
                                produk kami yang merupakan singkatan dari “Kompres Erythrina Subumbrans”.
                            </p>
                            <p>Kompres multifungsi “KORINA” dibuat untuk menurunkan demam dan meredakan gejala
                                penyertanya dalam 1 produk sekaligus. Produk kami aman, nyaman, dan praktis digunakan
                                karena terbuat dari bahan alami yaitu dadap serep (Erythrina Subumbrans) disertai dengan
                                berbagai varian aroma untuk menambah kenyamanan saat digunakan yang tentunya bermanfaat
                                bagi tubuh. </p>
                            <p>Kami memilih bahan-bahan yang berkualitas untuk menghasilkan kompres terbaik. Kompres
                                KORINA diharapkan dapat membantu memberikan solusi bagi masyarakat untuk mengatasi
                                masalah demam serta meredakan gejaja penyertanya dan diharapkan produk kami dapat terus
                                berkembang untuk mengangkat nilai local Indonesia. </p>

                        </div>
                    </div>



                </div>
            </div>

        </section><!-- End About Section -->



        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Produk</h2>
                    <p>Varian Produk Kami</p>
                </header>



                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    @foreach ($produk as $item)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{ asset($item->foto) }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>{{ $item->nama }}</h4>
                                    <p>Rp. {{ $item->harga }}</p>
                                    <div class="portfolio-links">
                                        <a href="{{ asset($item->foto) }}" data-gallery="portfolioGallery"
                                            class="portfokio-lightbox" title="{{ $item->nama }}"><i
                                                class="bi bi-eye"></i></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach





                </div>

            </div>

        </section><!-- End Portfolio Section -->


        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-blog-posts" class="recent-blog-posts">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Blog</h2>
                    <p>Recent posts form our Blog</p>
                </header>

                <div class="row">

                    @foreach ($blog as $m)
                        <div class="col-lg-4">
                            <div class="post-box">
                                <div class="post-img"><img
                                        src="{{ asset($m->foto) }}" class="img-fluid"
                                        alt=""></div>
                                <span class="post-date">Tue, September 15</span>
                                <h3 class="post-title">{{$m->judul}}
                                </h3>
                                <a href="{{url('/blog/'.$m->id)}}" class="readmore stretched-link mt-auto"><span>Read
                                        More</span><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>

                    @endforeach

                </div>

            </div>

        </section><!-- End Recent Blog Posts Section -->

        <section id="pemesanan" class="contact">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <p>Pembelian</p>
                </header>
                <div class="row gy-4">
                    <div class="col-lg-12">
                        <form action="forms/contact.php" method="post" class="php-email-form">
                            <div class="row gy-4">

                                <div class="col-md-4">
                                    <input type="text" name="name" class="form-control" placeholder="Nama Lengkap"
                                        required>
                                </div>

                                <div class="col-md-4">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>

                                <div class="col-md-4">
                                    <input type="email" class="form-control" name="phone"
                                        placeholder="Nomor Handphone/WA" required>
                                </div>

                                <div class="col-md-12">
                                    <select name="produk" class="form-control" id="">
                                        <option value="">Pilih Produk</option>
                                    </select>

                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="alamat" rows="3" placeholder="Alamat"
                                        required></textarea>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="3"
                                        placeholder="Catatan (Opsional)" required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Pesan</button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">

                    <p>Contact Us</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <a href="https://shopee.co.id/kompres_korina?smtt=0.0.9">
                                    <div class="info-box">
                                        <i class="bi bi-shop"></i>
                                        <h3>Shopee</h3>

                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://wa.me/message/MHYRDUT2XEFTA1">
                                    <div class="info-box">
                                        <i class="bi bi-whatsapp"></i>
                                        <h3>WA Order</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="http://wa.me/+6282140716397">
                                    <div class="info-box">
                                        <i class="bi bi-whatsapp"></i>
                                        <h3>WA Owner</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://line.me/ti/p/mB_0109t17">
                                    <div class="info-box">
                                        <i class="bi bi-chat"></i>
                                        <h3>Line</h3>
                                    </div>
                                </a>
                            </div>
                        </div>



                    </div>

                    <div class="col-md-6">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <a href="http://tiktok.com/@kompreskorina">
                                    <div class="info-box">
                                        <i class="bi bi-music-note"></i>
                                        <h3>Tiktok</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://twitter.com/kompres_korina?s=09 ">
                                    <div class="info-box">
                                        <i class="bi bi-twitter"></i>
                                        <h3>Twitter</h3>
                                    </div>
                                </a>

                            </div>
                            <div class="col-md-6">
                                <a href="https://www.facebook.com/kompres.korina ">
                                    <div class="info-box">
                                        <i class="bi bi-facebook"></i>
                                        <h3>Facebook</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://www.youtube.com/channel/UCzQiZQtyaE42lPS5VemJMUg">
                                    <div class="info-box">
                                        <i class="bi bi-youtube"></i>
                                        <h3>Youtube</h3>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>



                </div>

            </div>

        </section><!-- End Contact Section -->

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
