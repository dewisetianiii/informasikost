<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ada-Kost</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="assets/frontend/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/frontend/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/frontend/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="assets/frontend/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/frontend/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="assets/frontend/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="assets/frontend/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="assets/frontend/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="assets/frontend/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="./index.html"><img src="assets/frontend/img/kost.jpg" alt=""></a>
                </div>
                {{-- <div class="nav-right">
                    <a href="#" class="primary-btn">Make a Reservation</a>
                </div> --}}
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="./index.html">Home</a></li>
                        <li><a href="./about">About</a></li>
                        <li><a href="rooms">Rooms</a></li>
                        <li><a href="./contact">Contact</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Area Section Begin -->
    <section class="hero-area set-bg" data-setbg="assets/frontend/img/foto1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="hero-text">
                        <h1>Cari Kost/Kontrakan?Ada-kost Aja</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Area Section End -->

    <!-- Search Filter Section Begin -->
    {{-- <section class="search-filter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="#" class="check-form">
                        <h4>Check Availability</h4>
                        <div class="datepicker">
                            <p>From</p>
                            <input type="text" class="datepicker-1" value="dd / mm / yyyy">
                            <img src="assets/frontend/img/calendar.png" alt="">
                        </div>
                        <div class="datepicker">
                            <p>To</p>
                            <input type="text" class="datepicker-2" value="dd / mm / yyyy">
                            <img src="assets/frontend/img/calendar.png" alt="">
                        </div>
                        <div class="room-quantity">
                            <div class="single-quantity">
                                <p>Adults</p>
                                <div class="pro-qty"><input type="text" value="0"></div>
                            </div>
                            <div class="single-quantity">
                                <p>Children</p>
                                <div class="pro-qty"><input type="text" value="0"></div>
                            </div>
                            <div class="single-quantity last">
                                <p>Rooms</p>
                                <div class="pro-qty"><input type="text" value="0"></div>
                            </div>
                        </div>
                        <div class="room-selector">
                            <p>Room</p>
                            <select class="suit-select">
                                <option>Eg. Master suite</option>
                                <option value="">Double Room</option>
                                <option value="">Single Room</option>
                                <option value="">Special Room</option>
                            </select>
                        </div>
                        <button type="submit">Go</button>
                    </form>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Search Filter Section End -->

    <!-- Intro Text Section Begin -->
    <section class="intro-section spad">
        <div class="container">
            <div class="row intro-text">
                <div class="col-lg-5">
                    <div class="intro-left">
                        <div class="section-title">
                            <span>Ingin cari tahu tentang kost/Kontrakan sekitar Bandung?</span>
                            <h2>Dapatkan infonya di Ada-kost Aja </h2>
                        </div>
                        <p>Ada-kost - Aplikasi Pencari Info Kost/Kontrakan sekitar Bandung
                        Ada-kost menyajikan informasi Kamar kosan, lengkap dengan fasilitas kost, harga kost,
                        beserta foto desain kamar yang disesuaikan dengan kondisi sebenarnya. </p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="intro-right">
                         <div class="col-sm-6">
                            <div class="about-img">
                                <img src="assets/frontend/img/bdg.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Intro Text Section End -->

    <!-- Facilities Section Begin -->
    <section class="facilities-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="facilities-item set-bg" data-setbg="assets/frontend/img/rooms/kos1.jpg">
                        <div class="fi-title">
                            <h2>kost telkom</h2>
                            <p>From Rp. 43.000.000/tahun</p>
                        </div>
                        <div class="fi-features">
                            <div class="fi-info">
                                <i class="flaticon-019-television"></i>
                                <p>Smart TV</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-029-wifi"></i>
                                <p>High Wi-fii</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-003-air-conditioner"></i>
                                <p>AC</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-036-parking"></i>
                                <p>Parking</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="facilities-item set-bg fi-right" data-setbg="assets/frontend/img/rooms/kos2.jpg">
                        <div class="fi-title">
                            <h2>kost telkom</h2>
                            <p>fasilitas kamar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Facilities Section End -->

    <!-- Testimonial Section Begin -->
    {{-- <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2>Guestbook</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="testimonial-item">
                        <div class="ti-time">
                            02 / 02 / 2019
                        </div>
                        <h4>We loved our stay</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiselit. Vivamus libero mauris, bibendum eget
                            sapien ac, ultrices rhoncus ipsum. Donec nec sapien in urna fermentum ornare.</p>
                        <div class="ti-author">
                            <div class="author-pic">
                                <img src="assets/frontend/img/author-1.png" alt="">
                            </div>
                            <div class="author-text">
                                <h6>JOHN DOE <span>Madrid</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-item">
                        <div class="ti-time">
                            02 / 02 / 2019
                        </div>
                        <h4>I will come back again</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Ipsum dolor sit amet, consectetur adipiselit. Vivamus libero mauris, bibendum eget sapien ac,
                            ultrices rhoncus ipsum. Donec nec sapien in urna fermentum ornare.</p>
                        <div class="ti-author">
                            <div class="author-pic">
                                <img src="assets/frontend/img/author-2.png" alt="">
                            </div>
                            <div class="author-text">
                                <h6>Maria Smith <span>Madrid</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Testimonial Section End -->

    <!-- Video Section Begin -->
    {{-- <div class="video-section">
        <div class="video-bg set-bg" data-setbg="assets/frontend/img/video-bg.jpg"></div>
        <div class="container">
            <div class="video-text set-bg" data-setbg="assets/frontend/img/video-inside-bg.jpg">
                <a href="https://www.youtube.com/watch?v=j56YlCXuPFU" class="pop-up"><i class="fa fa-play"></i></a>
            </div>
        </div>
    </div> --}}
    <!-- Video Section End -->

    <!-- Home Page About Section Begin -->
    <section class="homepage-about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <h2>“Rekomendasi Kost untuk Putri”</h2>
                        </div>
                        <p>fasilitas: <br> 1. Kamar Mandi Dalam  2. Springbed  3. Meja Belajar <br>
                            4. Lemari  5. Water Heater 6. Dapur Bersama <br> 7. Akses masuk finger print  8. CCTV 24 jam <br><br>
                            Lokasi: Jl.Sukamanah No.25 Bandung Pusat Kota(dekat paskal 23,BINUS) <br> HARGA/BULAN: 1,5-1,8</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="about-img">
                                <img src="assets/frontend/img/rooms/kos41.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-img">
                                <img src="assets/frontend/img/rooms/kos42.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-img">
                                <img src="assets/frontend/img/rooms/kos43.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-img">
                                <img src="assets/frontend/img/rooms/kos44.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Page About Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-item">
                        <div class="footer-logo">
                            <a href="#"><img src="assets/frontend/img/kost.jpg" alt=""></a>
                        </div>
                        <p>Ada-kost - Aplikasi Pencari Info Kost/Kontrakan sekitar Bandung</p>
                    </div>
                </div>
                {{-- <div class="col-lg-4">
                    <div class="footer-item">
                        <h5>Newsletter</h5>
                        <div class="newslatter-form">
                            <input type="text" placeholder="Your Email Here">
                            <button type="submit">Subscribe</button>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-4">
                    <div class="footer-item">
                        <h5>Contact Info</h5>
                        <ul>
                            <li><img src="assets/frontend/img/placeholder.png" alt="">Bandung<br />Jawa Barat</li>
                            <li><img src="assets/frontend/img/phone.png" alt="">+1 (603)535-4592</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        
                        <ul>
                            <li class="active"><a href="/">Home</a></li>
                            <li><a href="./about">About</a></li>
                            <li><a href="./rooms">Rooms</a></li>
                            <li><a href="./contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
<div class="row pt-5">
                    <div class="col-lg-12 ">
                        <div class="small text-white text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="assets/frontend/js/jquery-3.3.1.min.js"></script>
    <script src="assets/frontend/js/bootstrap.min.js"></script>
    <script src="assets/frontend/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/frontend/js/jquery-ui.min.js"></script>
    <script src="assets/frontend/js/jquery.nice-select.min.js"></script>
    <script src="assets/frontend/js/jquery.slicknav.js"></script>
    <script src="assets/frontend/js/owl.carousel.min.js"></script>
    <script src="assets/frontend/js/main.js"></script>
</body>

</html>