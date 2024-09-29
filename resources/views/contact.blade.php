@extends("layouts.app")
@php
$setting = \App\Models\Setting::find(1);
@endphp
@section("content")
    @include("partials.page-header")
    @include("partials.page-hero",["title"=>"Contact Us"])

    <section class="contact-section pt-130 pb-130">
        <div class="container">
            <div class="row gy-lg-0 gy-5">
                <div class="col-lg-7">
                    <div class="blog-contact-form">
                        <h2 class="title mb-0">Leave A Reply</h2>
                        <p class="mb-30 mt-10">Fill-up The Form and Message us of your amazing question</p>
                        <div class="request-form">
                            <form action="https://html.rrdevs.net/bizan/mail.php" method="post" id="ajax_contact" class="form-horizontal">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Your Name">
                                            <div class="icon"><i class="fa-regular fa-user"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <input type="email" id="email" name="email" class="form-control" placeholder="Your Email">
                                            <div class="icon"><i class="fa-sharp fa-regular fa-envelope"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="form-item">
                                            <input type="etextmail" id="subjec" name="subject" class="form-control" placeholder="Your Subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="form-item message-item">
                                            <textarea id="message" name="message" cols="30" rows="5" class="form-control address" placeholder="Message"></textarea>
                                            <div class="icon"><i class="fa-light fa-messages"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-btn">
                                    <button id="submit" class="bz-primary-btn" type="submit">Submit Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="contact-content">
                        <div class="contact-top">
                            <h3 class="title">Office Information</h3>
                            <p>Completely recapitalize 24/7 communities via standards compliant metrics whereas.</p>
                        </div>
                        <div class="contact-list">
                            <div class="list-item">
                                <div class="icon">
                                    <i class="fa-sharp fa-solid fa-phone"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Phone Number & Email</h4>
                                    <span><a href="tel:+{{ $setting->phone }}">{{ $setting->phone }}</a></span>
                                    <span><a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></span>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="icon">
                                    <i class="fa-sharp fa-solid fa-location-dot"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Our Office Address</h4>
                                    <p>{{ $setting->address }}</p>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="icon">
                                    <i class="fa-sharp fa-solid fa-clock"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Official Work Time</h4>
                                    <span>Monday - Friday: 09:00 - 20:00</span>
                                    <span>Sunday & Saturday: 10:30 - 22:00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection