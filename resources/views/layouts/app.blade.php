@php
$setting = \App\Models\Setting::find(1);
@endphp

<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{$setting->meta_description}}">
        <meta name="keywords" content="{{$setting->met_tag}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$setting->website_title}} | @yield('title', '')</title>

        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset("assets/img/favicon.png") }}">
        <!-- CSS here -->
        <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/fontawesome.min.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/venobox.min.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/animate.min.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/keyframe-animation.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/daterangepicker.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/odometer.min.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/nice-select.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/swiper.min.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/main.css") }}">
    </head>

    <body>
       @yield("content")
        <footer class="footer-section pt-120 overflow-hidden">
             
            <div class="container">
               
                <div class="row footer-wrap">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="widget-header">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logo/logo-1.png" alt="img"></a>
                                </div>
                            </div>
                            <p>{{ $setting->address }}</p>
                            <ul class="footer-social">
                                <li><a href="{{ $setting->facebook }}"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="{{ $setting->instagram }}"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="{{ $setting->twitter }}"><i class="fa-brands fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget widget-space">
                            <div class="widget-header">
                                <h3 class="widget-title">Quick Links</h3>
                            </div>
                            <ul class="footer-list">
                                <li><a href="{{ route("about") }}">About Us</a></li>
                                <li><a href="{{ route("blogs") }}">Blog</a></li>
                                <li><a href="{{ route("contact") }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-widget">
                            <div class="widget-header">
                                <h3 class="widget-title">Information</h3>
                            </div>
                            <ul class="footer-list">
                                <li><a href="{{ route("services") }}">Request Service</a></li>
                                <li><a href="{{ route("about") }}">Our Work</a></li>
                                <li><a href="{{ route("about") }}">What We Do</a></li>
                                <li><a href="{{ route("about") }}">Our Process</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget widget-space">
                            <div class="widget-header">
                                <h3 class="widget-title">Our Newsletter</h3>
                            </div>
                            <p>Sign up to Private's weekly newsletter to get the latest updates.</p>
                            <div class="footer-form mb-20">
                                <form action="#" class="rr-subscribe-form">
                                    <input class="form-control" type="email" name="email" placeholder="Email address">
                                    <input type="hidden" name="action" value="mailchimpsubscribe">
                                    <button class="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="row copyright-content">
                        <div class="col-md-6">
                            <p>© {{ Date("Y") }} Palpressmedia. All Rights Reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <ul class="copy-list">
                                <li><a href="{{ route("contact") }}">Terms & Conditions</a></li>
                                <li><a href="{{ route("contact") }}">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ./ footer-section -->
        <div id="scroll-percentage"><span id="scroll-percentage-value"></span></div>
        <!--scrollup-->
        <!-- JS here -->
        <script src="{{ asset("assets/js/vendor/jquary-3.6.0.min.js") }}"></script>
        <script src="{{ asset("assets/js/vendor/bootstrap-bundle.js") }}"></script>
        <script src="{{ asset("assets/js/vendor/imagesloaded-pkgd.js") }}"></script>
        <script src="{{ asset("assets/js/vendor/waypoints.min.js") }}"></script>
        <script src="{{ asset("assets/js/vendor/venobox.min.j") }}s"></script>
        <script src="{{ asset("assets/js/vendor/odometer.min.js") }}"></script>
        <script src="{{ asset("assets/js/vendor/meanmenu.js") }}"></script>
        <script src="{{ asset("assets/js/vendor/smooth-scroll.js") }}"></script>
        <script src="{{ asset("assets/js/vendor/jquery.isotope.js") }}"></script>
        <script src="{{ asset("assets/js/vendor/wow.min.js") }}"></script>
        <script src="{{ asset("assets/js/vendor/swiper.min.js") }}"></script>
        <script src="{{ asset("assets/js/vendor/moment.min.js") }}"></script>
        <script src="{{ asset("assets/js/vendor/daterangepicker.min.js") }}"></script>
        <script src="{{ asset("assets/js/vendor/split-type.min.js") }}"></script>
        <script src="{{ asset("assets/js/vendor/gsap.min.js") }}"></script>
        <script src="{{ asset("assets/js/vendor/scroll-trigger.min.js") }}"></script>
        <script src="{{ asset("assets/js/vendor/nice-select.js") }}"></script>
        <script src="{{ asset("assets/js/contact.js") }}"></script>
        <script src="{{ asset("assets/js/main.js") }}"></script>
    </body>
</html>
