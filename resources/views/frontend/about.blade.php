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
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

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
                        <li><a href="/">Home</a></li>
                        <li class="active"><a href="./about">About</a></li>
                        <li><a href="rooms">Rooms</a></li>
                        <li><a href="./contact.html">Contact</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Area Section Begin -->
    {{-- <div class="hero-area set-bg other-page" data-setbg="assets/frontend/img/foto1.jpg">
    </div> --}}
    <!-- Hero Area Section End -->

    <!-- Search Filter Section Begin -->
    {{-- <section class="search-filter other-page-filter">
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

    <!-- About Us Section Begin -->


    
    <section class="about-us spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="about-left">
                        <div class="section-title">
                            <span>Anda bisa mencari berbagai informasi</span>
                            <h2>Tentang kost/Kontrakan sekitar Bandung</h2>
                        </div>
                        <p class="second-text">Ada-Kost adalah situs/website pencarian Kost atau kontrakan
                        di sekitar daerah Bandung.</p>
                        <p>Berbagai Informasi yang dapat kamu lihat di Ada-kost :<br>
                        - Alamat Rumah Kost atau kontrakan <br>
                        - Foto-foto lengkap fasilitas kosan dan desain kamar kost <br>
                        - Harga Kost <br>
                       - Informasi ketersediaan kamar kost <br>
                       - Nomor yang bisa dihubungi</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-lg-7 col-md-7">
                            <div class="about-img">
                                <img src="assets/frontend/img/rooms/kos31.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <div class="about-img second-img">
                                <img src="assets/frontend/img/rooms/kos51.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-5">
                            <div class="about-img third-img">
                                <img src="assets/frontend/img/rooms/kos43.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="about-img">
                                <img src="assets/frontend/img/rooms/kos3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
    <!-- About Us Section End -->

    
    <!-- Call To Action Begin -->
    <section class="callto-section">
        <div class="container">
            <div class="callto-text">
                <h2>Dapatkan "info kost murah" hanya di Ada-kost</h2>
            </div>
        </div>
    </section>
    <!-- Call To Action End  -->

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