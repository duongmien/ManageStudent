<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ</title>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{('assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{('assets/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{('assets/css/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{('assets/css/video.min.css')}}">
    <link rel="stylesheet" href="{{('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{('assets/css/lightbox.css')}}">
    <link rel="stylesheet" href="{{('assets/css/progess.css')}}">
    <link rel="stylesheet" href="{{('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{('assets/css/colors/switch.css')}}">
    <!-- <link rel="icon" type="png" href="{{asset('frontend/assets/img/favicon.png')}}"> -->
</head>

<body>

    <div id="preloader"></div>


    <!-- Start of Header section
		============================================= -->
    <header>
        <div id="main-menu" class="main-menu-container">
            <div class="main-menu">
                <div class="container">
                    <div class="navbar-default">
                        <div class="navbar-header float-left">
                            <a class="navbar-brand text-uppercase" href="#"><img src="{{('assets/img/logo/logo.png')}}" alt="logo"></a>
                        </div><!-- /.navbar-header -->

                        <div class="select-lang">
                            <select>
                                <option value="9" selected="">VNI</option>
                                <option value="10">ENG</option>
                            </select>
                        </div>
                        <div class="cart-search float-right ul-li">
                            <ul>
                                <li>
                                    <button type="button" class="toggle-overlay search-btn">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <div class="search-body">
                                        <div class="search-form">
                                            <form action="#">
                                                <input class="search-input" type="search" placeholder="Tìm kiếm ở đây">
                                                <div class="outer-close toggle-overlay">
                                                    <button type="button" class="search-close">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="log-in float-right">
                            <a data-toggle="modal" data-target="#myModal" href="#">Đăng nhập</a>
                            <!-- The Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header backgroud-style">
                                            <div class="gradient-bg"></div>
                                            <div class="popup-logo">
                                                <img src="{{('assets/img/logo/p-logo.jpg')}}" alt="">
                                            </div>
                                            <div class="popup-text text-center">
                                                <h2> <span>Đăng nhập</span> tài khoản của bạn.</h2>
                                            </div>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="alt-text text-center"><a href="#">ĐĂNG NHẬP</a> </div>
                                            <form class="contact_form" action="#" method="POST" enctype="multipart/form-data">
                                                <div class="contact-info">
                                                    <input class="name" name="madn" type="text" placeholder="Nhập mã đăng nhập của bạn...">
                                                </div>
                                                <div class="contact-info">
                                                    <input class="pass" name="name" type="password" placeholder="Nhập mật khẩu...">
                                                </div>
                                                <div class="nws-button text-center white text-capitalize">
                                                    <button type="submit" value="Submit">đăng nhập</button>
                                                </div>
                                            </form>
                                            <div class="log-in-footer text-center">
                                                <p>Quản lý thông tin sinh viên</p>
                                                <p>Trường đại học Sư Phạm Kỹ Thuật Đà Nẵng</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <nav class="navbar-menu float-right">
                            <div class="nav-menu ul-li">
                                <ul>
                                    <li class="menu-item-has-children ul-li-block">
                                        <a href="#">Trang Chủ</a>
                                    </li>
                                    <li><a href="contact.html">Liên hệ</a></li>
                                </ul>
                            </div>
                        </nav>

                        <div class="mobile-menu">
                            <div class="logo"><a href="index-1.html"><img src="{{('assets/img/logo/logo.png')}}" tppabs="https://jthemes.net/themes/html/genius-course/assets/img/logo/logo.png" alt="Logo"></a></div>
                            <nav>
                                <ul>
                                    <li><a href="index.html">Trang Chủ</a>
                                    </li>
                                    <li><a href="contact.html">Liên hệ</a></li>
                                </ul>
                            </nav>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <!-- Start Of scound contact section
		============================================= -->
        <section id="contact_secound" class="contact_secound_section backgroud-style">
        <div class="container">
            <div class="contact_secound_content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-left-content">
                            <div class="section-title  mb45 headline text-left">
                                <span class="subtitle ml42  text-uppercase">Địa chỉ</span>
                                <h2><span> Đại học Sư Phạm Kỹ Thuật Đà Nẵng</span></h2>
                                <p>
                                    "Trường Đại học Sư phạm Kỹ thuật- Biến ước mơ thành hiện thực - Đường đến thành công. "
                                </p>
                            </div>

                            <div class="contact-address">
                                <div class="contact-address-details">
                                    <div class="address-icon relative-position text-center float-left">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="address-details ul-li-block">
                                        <ul>
                                            <li><span>Địa chỉ: </span>48 Cao Thắng-phường Thanh Bình- quận Hải Châu -TP. Đà Nẵng</li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="contact-address-details">
                                    <div class="address-icon relative-position text-center float-left">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="address-details ul-li-block">
                                        <ul>
                                            <li><span>Primary: </span>(0236) 3822571</li>
                                            <li><span>Second: </span>(20) 3434 9999</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="contact-address-details">
                                    <div class="address-icon relative-position text-center float-left">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="address-details ul-li-block">
                                        <ul>
                                            <li><span>Primary: </span>info@geniuscourse.com</li>
                                            <li><span>Second: </span>mail@genius.info</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="contact_secound_form">
                            <div class="section-title-2 mb65 headline text-left">
                                <h2>Send Us a message</h2>
                            </div>
                            <form class="contact_form" action="#" method="POST" enctype="multipart/form-data">
                                <div class="contact-info">
                                    <input class="name" name="name" type="text" placeholder="Your Name.">
                                </div>
                                <div class="contact-info">
                                    <input class="email" name="email" type="email" placeholder="Your Email">
                                </div>
                                <textarea placeholder="Message."></textarea>
                                <div class="nws-button text-center  gradient-bg text-capitalize">
                                    <button type="submit" value="Submit">SEND MESSAGE NOW <i class="fas fa-caret-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_2 backgroud-style">
            <div class="container">
                <div class="back-top text-center mb45">
                    <a class="scrollup" href="#"><img src="{{('assets/img/banner/bt.png')}}"  alt=""></a>
                </div>
                <div class="footer_2_logo text-center">
                    <img src="{{('assets/img/logo/logo.png')}}" alt="">
                </div>

                <div class="footer_2_subs text-center">
                    <p>We take our mission of increasing global access to quality education seriously. </p>
                    <div class="subs-form relative-position">
                        <form action="#" method="post">
                            <input class="course" name="course" type="email" placeholder="Email Address.">
                            <div class="nws-button text-center  gradient-bg text-uppercase">
                                <button type="submit" value="Submit">Subscribe now</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="copy-right-menu">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="copy-right-text">
                                <p>© 2018 - Designed & Developed by <a href="javascript:if(confirm(%27https://jthemes.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://jthemes.com/%27" tppabs="https://jthemes.com/" title="Best Premium WordPress, HTML Template Store"> Jthemes Studio</a>. All rights reserved</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-social  text-center ul-li">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="copy-right-menu-item float-right ul-li">
                                <ul>
                                    <li><a href="#">License</a></li>
                                    <li><a href="#">Privacy & Policy</a></li>
                                    <li><a href="#">Term Of Service</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ENd Of scound contact section
		============================================= -->
    <!-- For Js Library -->
    <script src="{{('assets/js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{('assets/js/popper.min.js')}}"></script>
    <script src="{{('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{('assets/js/jarallax.js')}}"></script>
    <script src="{{('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{('assets/js/lightbox.js')}}"></script>
    <script src="{{('assets/js/jquery.meanmenu.js')}}"></script>
    <script src="{{('assets/js/scrollreveal.min.js')}}"></script>
    <script src="{{('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{('assets/js/waypoints.min.js')}}"></script>
    <script src="{{('assets/js/jquery-ui.js')}}"></script>
    <script src="{{('assets/js/gmap3.min.js')}}"></script>
    <script src="{{('assets/js/switch.js')}}"></script>
    <script src="../../../../maps.google.com/maps/api/js-key=AIzaSyC61_QVqt9LAhwFdlQmsNwi5aUJy9B2SyA.js"></script>
    <script src="{{('assets/js/script.js')}}"></script>
</body>

</html>