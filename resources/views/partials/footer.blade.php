@php
$setting = \App\Models\Setting::find(1);
@endphp

<footer class="footer-section overflow-hidden">
             
    <div class="container">
       
        <div class="row footer-wrap">
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <div class="widget-header">
                        <div class="footer-logo">
                            <a href="{{ route("welcome") }}"><img src="{{asset("images/settings/logo-footer.png")}}" alt="img" style="width:50%"></a>
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
                        {{-- <li><a href="javascript:;">Blog</a></li> --}}
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
                    <p>© {{ Date("Y") }} Palpresmedia. All Rights Reserved.</p>
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