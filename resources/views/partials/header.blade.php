 <!-- header-area-start -->
@php
$setting = \App\Models\Setting::find(1);
@endphp

 <header class="header sticky-active">
    <div class="top-bar bar-2">
        <div class="container">
            <div class="top-bar-inner">
                <div class="top-bar-left">
                    {{-- <span>Now Hiring: Are you looking for best consultancy service?</span> --}}
                </div>
                <div class="top-bar-left">
                    {{-- <span><i class="fa-sharp fa-regular fa-clock"></i>Office Hours: 08:00am-6:00pm</span> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="middle-header">
        <div class="container">
            <div class="middle-header-inner">
                <div class="header-logo">
                    <div class="shape"></div>
                    <a href="{{ route("welcome") }}">
                        <img src="{{ asset("images/settings/$setting->website_logo_dark") }}" alt="logo" style="width:50%;">
                    </a>
                </div>
                <div class="header-items-wrap">
                    <div class="header-item">
                        <div class="icon"><i class="fa-sharp fa-solid fa-phone"></i></div>
                        <div class="content">
                            <span>Call Us 24/7</span>
                            <a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a>
                        </div>
                    </div>
                    <div class="header-item">
                        <div class="icon"><i class="fa-sharp fa-solid fa-envelope"></i></div>
                        <div class="content">
                            <span>Mail For Support</span>
                            <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                        </div>
                    </div>
                    <div class="header-item">
                        <div class="icon"><i class="fa-sharp fa-solid fa-location-dot"></i></div>
                        <div class="content">
                            <span>Office Address</span>
                            <h4 class="address mb-0">{{ $setting->address }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="primary-header">
        <div class="container">
            <div class="primary-header-inner">
                <div class="header-logo d-lg-none">
                    <a href="{{ route("welcome") }}">
                        <img src="{{ asset("images/settings/$setting->website_logo_light") }}" alt="logo">
                    </a>
                </div>
                <div class="header-menu-wrap">
                    <div class="mobile-menu-items">
                        <ul>
                            <li class="menu-item-has-children active">
                                <a href="{{ url("/") }}">Home</a>
                               
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ route("about") }}">About Us</a>
                               
                            </li>
                            <li class="">
                                <a href="{{ route("services") }}">Services</a>
                               
                            </li>
                            <li class="">
                                <a href="{{ route("ourblogs") }}">Blog</a>
                              
                            </li>
                            <li class="">
                                <a href="{{ route("ourportfolios") }}">Portfolio</a>
                              
                            </li>
                            <li><a href="{{ route("contact") }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.header-menu-wrap -->
                <div class="header-right-wrap">
                    <div class="header-right">
                        <a href="{{ route("contact") }}" class="header-btn">Book Appointment</a>
                        <div class="search-icon dl-search-icon">
                            <i class="fa-regular fa-magnifying-glass"></i>
                        </div>
                        <div class="sidebar-icon">
                            <button class="sidebar-trigger open">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                    <!-- /.header-right -->
                </div>
            </div>
            <!-- /.primary-header-inner -->
        </div>
    </div>
</header>
<!-- /.Main Header -->