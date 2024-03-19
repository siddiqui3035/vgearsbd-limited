<!-- Footer STYLES  -->
{{-- <footer id="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="footer-logo">
                    <img src="{{ asset('front-asset/assets/images/logo.png') }}" alt="" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="footer-menu2">
                    <ul>
                        <li><a href="#">Content management</a></li>
                        <li><a href="#">Email Marketing</a></li>
                        <li><a href="#">Social Marketing</a></li>
                        <li><a href="#">Keyword Alanytics</a></li>
                        <li><a href="#">Site Optimization</a></li>
                        <li><a href="#">Pay per click</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-menu2">
                    <ul>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Affiliates</a></li>
                        <li><a href="#">Help Center</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-menu2">
                    <ul>
                        <li>06 Highley St, Victoria,california Australia.</li>
                        <li>Highley St, park-Victoria, Australia.</li>
                        <li>+566-7798093435</li>
                        <li>emailbox@email.com</li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="footer-btm">
                    <p>Business Web Application made by
                        <a href="http://www.coderszonebd.com/">
                            <span>Coder's Zone</span>
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="footer-btm text-right">
                    <p>Copyright Reserved to <a href="http://www.vgearsbd.com">VGEARSBD .{{ now()->year }}</a></p>
                </div>
            </div>
        </div>
    </div>
</footer> --}}
<!-- FOOTER STYLES END -->
<footer class="footer_widgets">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-7">
                    <div class="widgets_container contact_us">
                        <div class="footer_logo">
                            {{-- <div class="earth"></div> --}}
                            {{-- <a href="index.html">
                                <img src="{{ asset('front-asset/assets/img/logo/vlogo.png') }}" style="height: 150px;" alt="">
                            </a> --}}
                            <div class="d-flex align-items-center justify-between">
                                <img src="{{ asset('front-asset/assets/img/logo/vlogo.png') }}" style="height: 150px;" alt="">
                                <p class="text-danger font-weight-bold">LIMITED</p>
                            </div>
                        </div>
                        {{-- <p class="footer_desc">We are a team of designers and developers that create high quality
                            eCommerce, WordPress, Shopify .</p>
                        <p><span>Address:</span> 4710-4890 Breckinridge USA</p>
                        <p><span>Email:</span> <a href="#">demo@hasthemes.com</a></p>
                        <p><span>Call us:</span> <a href="tel:(08)23456789">(08) 23 456 789</a> </p> --}}
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-5">
                    <div class="widgets_container widget_menu">
                        <h3>Information</h3>
                        <div class="footer_menu">

                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#"> Privacy Policy</a></li>
                                <li><a href="#"> Terms & Conditions</a></li>
                                <li><a href="contact.html"> Contact Us</a></li>
                                <li><a href="#"> Site Map</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="widgets_container widget_menu">
                        <h3>Extras</h3>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="#">Brands</a></li>
                                <li><a href="#"> Gift Certificates</a></li>
                                <li><a href="#">Affiliate</a></li>
                                <li><a href="#">Specials</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#"> Order History</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="widgets_container widget_newsletter">
                        <h3>Sign up newsletter</h3>
                        <p class="footer_desc">Get updates by subscribe our weekly newsletter</p>
                        <div class="subscribe_form">
                            <form action="{{ route('subscribe.store') }}" method="post" class="mc-form footer-newsletter">
                                @csrf
                                <input name="email" type="email" autocomplete="off"
                                    placeholder="Enter you email" />
                                <button type="submit">Subscribe</button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div><!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7">
                    <div class="copyright_area">
                        <p>Copyright © {{ now()->year }} <a href="http://www.vgearsbd.com/">VGEARSBD</a> . All Rights Reserved.Design by <a
                                href="http://www.coderszonebd.com">Coder's Zone</a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="footer_payment">
                        <ul>
                            <li><a href="#"><img src="{{ asset('front-asset/assets/img/icon/paypal1.jpg') }}" alt=""></a>
                            </li>
                            <li><a href="#"><img src="{{ asset('front-asset/assets/img/icon/paypal2.jpg') }}" alt=""></a>
                            </li>
                            <li><a href="#"><img src="{{ asset('front-asset/assets/img/icon/paypal3.jpg') }}" alt=""></a>
                            </li>
                            <li><a href="#"><img src="{{ asset('front-asset/assets/img/icon/paypal4.jpg') }}" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

