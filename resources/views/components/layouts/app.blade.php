<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="shortcut icon" href="{{ asset('frontend/img/favicon.png') }}">
    <!-- =================== STYLE =================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-grid.css') }}">
    <link href="https://use.fontawesome.com/releases/v5.10.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
</head>
<body id="home">
<!-- =============== PRELOADER =============== -->
<div class="page-preloader-cover">
    <div class="cssload-loader">
        <div class="cssload-inner cssload-one"></div>
        <div class="cssload-inner cssload-two"></div>
        <div class="cssload-inner cssload-three"></div>
    </div>
</div>
<!-- ============== PRELOADER END ============== -->
<span class="bg-effect" style="background-image: url(frontend/img/main-bg.svg);"></span>
<x-ui.frontend.header/>

{{ $slot }}

<!--==================== FOOTER ====================-->
<footer>
    <div class="container">
        <div class="row">
            <div class="footer-cont col-12 col-sm-6 col-lg-4">
                <a href="index.html" class="logo"><img src="{{ asset('frontend/img/logo.svg') }}" alt="logo"></a>
                <p>7100 Athens Place Washington, DC 20521</p>
                <ul class="footer-contacts">
                    <li class="footer-phone">
                        <i aria-hidden="true" class="fas fa-phone"></i>
                        <a href="tel:+18001234567">1-800-1234-567</a>
                    </li>
                    <li class="footer-email">
                        <a href="mailto:rovadex@gmail.com">rovadex@gmail.com</a>
                    </li>
                </ul>
                <div class="footer-copyright"><a target="_blank" href="https://rovadex.com">Rovadex</a> © 2019. All
                    Rights Reserved.
                </div>
            </div>
            <div class="footer-item-link col-12 col-sm-6 col-lg-4">
                <div class="footer-link">
                    <h5>Event</h5>
                    <ul class="footer-list">
                        <li><a href="#about">About</a></li>
                        <li><a href="#news">News</a></li>
                        <li><a href="#schedule">Key figures</a></li>
                        <li><a href="#schedule">Runners' Photos</a></li>
                        <li><a href="#schedule">Results</a></li>
                        <li><a href="#schedule">Partners</a></li>
                    </ul>
                </div>
                <div class="footer-link">
                    <h5>Social</h5>
                    <ul class="footer-list">
                        <li><a target="_blank" href="https://www.facebook.com/rovadex">Facebook</a></li>
                        <li><a target="_blank" href="https://twitter.com/RovadexStudio">Twitter</a></li>
                        <li><a target="_blank" href="https://www.instagram.com/rovadex">Instagram</a></li>
                        <li><a target="_blank" href="https://www.youtube.com">Youtube</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-subscribe col-12 col-sm-6 col-lg-4">
                <h5>Subscribe to our newsletter. Stay up to date with our latest news and updates.</h5>
                <form class="subscribe-form">
                    <input class="inp-form" type="email" name="subscribe" placeholder="E-mail">
                    <button class="btn-form" type="submit"><i class="fas fa-paper-plane"></i></button>
                </form>
                <p>By clicking the button you agree to the <a href="#" target="_blank">Privacy Policy</a> and <a
                        href="#" target="_blank">Terms and Conditions</a></p>
            </div>
        </div>
    </div>
</footer>
<!--================== FOOTER END ==================-->

<!--=================== TO TOP ===================-->
<a class="to-top" href="#home">
    <i class="fa fa-angle-double-up" aria-hidden="true"></i>
</a>
<!--================= TO TOP END =================-->

<!--=================== SCRIPT	===================-->
<script src="{{ asset('frontend/js/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('frontend/js/slick.min.js') }}"></script>
<script src="{{ asset('frontend/js/rx-lazy.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.nice-select.js') }}"></script>
<script src="{{ asset('frontend/js/parallax.min.js') }}"></script>
<script src="{{ asset('frontend/js/scripts.js') }}"></script>
</body>
</html>
