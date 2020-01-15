<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ada-kost</title>

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
                        <li><a href="./about">About</a></li>
                        <li><a href="rooms">Rooms</a></li>
                        <li class="active"><a href="./contact">Contact</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Area Section Begin -->
    
    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-title">
                        <div class="section-title">
                            <h2>Hubungi Kami</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <form action="#" class="contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Your name">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" placeholder="Your email">
                            </div>
                            <div class="col-lg-12">
                                <input type="text" class="subject" placeholder="Subject">
                                <textarea placeholder="Message"></textarea>
                                <button type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="info-box">
                        <img src="assets/frontend/img/kost.jpg" alt="">
                        <ul>
                            <li>Bandung <br />Jawa Barat</li>
                            <li>+1 (603)535-4592</li>
                            <li>Email:Ada-kost@gmail.com</li>
                            <li>jam operasional: 09:00 -17:00</li>
                        </ul>
                        <div class="social-links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Section Begin -->
    {{-- <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26440.72384129847!2d-118.24906619231132!3d34.06719475913053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c659f50c318d%3A0xe2ffb80a9d3820ae!2sChinatown%2C%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1570213740685!5m2!1sen!2sbd"
            height="910" style="border:0;" allowfullscreen=""></iframe>
    </div> --}}
    <!-- Map Section End -->

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