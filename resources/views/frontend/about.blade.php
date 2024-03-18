<x-front-app-layout>
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area mb-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>About Us</h3>
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>about us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->
    <!--about section area -->
    {{-- <section class="about_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <figure>
                        <div class="about_thumb">
                            <img src="{{ asset('front-asset/assets/img/about/about1.jpg') }}" alt="">
                        </div>
                        <figcaption class="about_content">
                            <h1>We are a digital agency focused on delivering content and utility user-experiences.</h1>
                            <p>Adipiscing lacus ut elementum, nec duis, tempor litora turpis dapibus. Imperdiet cursus
                                odio tortor in elementum. Egestas nunc eleifend feugiat lectus laoreet, vel nunc taciti
                                integer cras. Hac pede dis, praesent nibh ac dui mauris sit. Pellentesque mi, facilisi
                                mauris, elit sociis leo sodales accumsan. Iaculis ac fringilla torquent lorem
                                consectetuer, sociosqu phasellus risus urna aliquam, ornare.</p>
                            <div class="about_signature">
                                <img src="{{ asset('front-asset/assets/img/about/about-us-signature.png') }}" alt="">
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section> --}}
    <!--about section end-->

    <!--chose us area start-->
    {{-- <div class="choseus_area" data-bgimg="{{ asset('front-asset/assets/img/about/about-us-policy-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="single_chose">
                        <div class="chose_icone">
                            <img src="{{ asset('front-asset/assets/img/about/About_icon1.png') }}" alt="">
                        </div>
                        <div class="chose_content">
                            <h3>Creative Design</h3>
                            <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare
                                velit amet</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_chose">
                        <div class="chose_icone">
                            <img src="{{ asset('front-asset/assets/img/about/About_icon2.png') }}" alt="">
                        </div>
                        <div class="chose_content">
                            <h3>100% Money Back Guarantee</h3>
                            <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare
                                velit amet</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_chose">
                        <div class="chose_icone">
                            <img src="{{ asset('front-asset/assets/img/about/About_icon3.png') }}" alt="">
                        </div>
                        <div class="chose_content">
                            <h3>Online Support 24/7</h3>
                            <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare
                                velit amet</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!--chose us area end-->

    <!--services img area-->
    <div class="about_gallery_section">
        <div class="container">
            <div class="about_gallery_container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <article class="single_gallery_section">
                            <figure>
                                <div class="gallery_thumb">
                                    <img src="{{ asset('front-asset/assets/img/about/Our-vision.jpeg') }}"
                                        width="350px" alt="">
                                </div>
                                <figcaption class="about_gallery_content">
                                    <h3>Our Vision</h3>
                                    <p>To be the premier provider of lubricant solutions, setting industry standards
                                        through innovation, sustainability, and customer-centricity, while fostering
                                        growth and prosperity for our stakeholders and communities.</p>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <article class="single_gallery_section">
                            <figure>
                                <div class="gallery_thumb">
                                    <img src="{{ asset('front-asset/assets/img/about/our-mission.jpg') }}"
                                        width="350px" alt="">
                                </div>
                                <figcaption class="about_gallery_content">
                                    <h3>Our Mission</h3>
                                    <p class="text-justify">Our mission is to deliver exceptional lubricant products and
                                        services that exceed customer expectations, uphold the highest standards of
                                        quality and environmental responsibility, and drive sustainable growth for our
                                        business and partners.</p>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <article class="single_gallery_section">
                            <figure>
                                <div class="gallery_thumb">
                                    <img src="{{ asset('front-asset/assets/img/about/our-value.jpg') }}" width="350px"
                                        alt="">
                                </div>
                                <figcaption class="about_gallery_content">
                                    <h3>Core Values</h3>
                                    <p></p>
                                    <p class="text-justify">• Excellence • Innovation • Integrity • Sustainability •
                                        Customer-Centricity</p>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--services img end-->

    <!--testimonial area start-->
    <div class="faq-client-say-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="faq-client_title">
                        <h2>What can we do for you ?</h2>
                    </div>
                    <div class="faq-style-wrap" id="faq-five">
                        <!-- Panel-default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a id="octagon" class="collapsed" role="button" data-bs-toggle="collapse"
                                        href="#faq-collapse1" aria-expanded="true" aria-controls="faq-collapse1"> <span
                                            class="button-faq"></span>
                                        {{ $aboutOne->title }}
                                    </a>
                                </h5>
                            </div>
                            <div id="faq-collapse1" class="collapse show" aria-expanded="true" role="tabpanel"
                                data-parent="#faq-five">
                                <div class="panel-body">
                                    <p>{{ $aboutOne->details }}</p>
                                </div>
                            </div>
                        </div>
                        <!--// Panel-default -->

                        <!-- Panel-default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="collapsed" role="button" data-bs-toggle="collapse" href="#faq-collapse2"
                                        aria-expanded="false" aria-controls="faq-collapse2"> <span
                                            class="button-faq"></span>
                                        {{ $aboutTwo->title }}
                                    </a>
                                </h5>
                            </div>
                            <div id="faq-collapse2" class="collapse" aria-expanded="false" role="tabpanel"
                                data-parent="#faq-five">
                                <div class="panel-body">
                                    <p>{{ $aboutTwo->details }}</p>
                                </div>
                            </div>
                        </div>
                        <!--// Panel-default -->

                        <!-- Panel-default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="collapsed" role="button" data-bs-toggle="collapse" href="#faq-collapse3"
                                        aria-expanded="false" aria-controls="faq-collapse3"> <span
                                            class="button-faq"></span>
                                        {{ $aboutThree->title }}
                                    </a>
                                </h5>
                            </div>
                            <div id="faq-collapse3" class="collapse" role="tabpanel" data-parent="#faq-five">
                                <div class="panel-body">
                                    <p> {{ $aboutThree->details }}</p>
                                </div>
                            </div>
                        </div>
                        <!--// Panel-default -->

                        <!-- Panel-default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="collapsed" role="button" data-bs-toggle="collapse" href="#faq-collapse4"
                                        aria-expanded="false" aria-controls="faq-collapse4"> <span
                                            class="button-faq"></span>
                                        {{ $aboutFour->title }}
                                    </a>
                                </h5>
                            </div>
                            <div id="faq-collapse4" class="collapse" role="tabpanel" data-parent="#faq-five">
                                <div class="panel-body">
                                    <p> {{ $aboutFour->details }}</p>
                                </div>
                            </div>
                        </div>
                        <!--// Panel-default -->

                        <!-- Panel-default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="collapsed" role="button" data-bs-toggle="collapse"
                                        href="#faq-collapse5" aria-expanded="false" aria-controls="faq-collapse5">
                                        <span class="button-faq"></span>
                                        {{ $aboutFive->title }}
                                    </a>
                                </h5>
                            </div>
                            <div id="faq-collapse5" class="collapse" role="tabpanel" data-parent="#faq-six">
                                <div class="panel-body">
                                    <p> {{ $aboutFive->details }}</p>
                                </div>
                            </div>
                        </div>
                        <!--// Panel-default -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <!--testimonial area start-->
                    <div class="testimonial_area  testimonial_about">
                        <div class="section_title">
                            <h2>Read Our Blogs</h2>
                        </div>
                        <div class="testimonial_container">
                            <div class="testimonial_carousel testimonial-two owl-carousel">
                                @forelse ($blogs as $blog)
                                    <div class="single_testimonial">
                                        <div class="testimonial_thumb">
                                            <a href="{{ route('blog.details', $blog->id) }}"><img
                                                    src="{{ asset($blog->image) }}" class="rounded"
                                                    style="width:100px!important;height:80px!important;"
                                                    alt=""></a>
                                        </div>
                                        <div class="testimonial_content">
                                            <div class="testimonial_icon_img">
                                                <img src="{{ asset('front-asset/assets/img/about/testimonials-icon.png') }}"
                                                    alt="">
                                            </div>
                                            <p>{{ substr($blog->short_description, 0, 60) }}</p>
                                            <a href="{{ route('blog.details', $blog->id) }}">{{ $blog->title }}</a>
                                        </div>
                                    </div>
                                @empty
                                    <div class="single_testimonial">
                                        <div class="testimonial_thumb">
                                            <a href="#"><img
                                                    src="{{ asset('front-asset/assets/img/about/testimonial2.png') }}"
                                                    alt=""></a>
                                        </div>
                                        <div class="testimonial_content">
                                            <div class="testimonial_icon_img">
                                                <img src="{{ asset('front-asset/assets/img/about/testimonials-icon.png') }}"
                                                    alt="">
                                            </div>
                                            <p>I'm so happy with all of the themes, great support, could not wish for
                                                more.
                                                These people are geniuses! Kudo's from the Netherlands!..</p>
                                            <a href="#">Rebecka Filson</a>
                                        </div>
                                    </div>

                                    <div class="single_testimonial">
                                        <div class="testimonial_thumb">
                                            <a href="#"><img
                                                    src="{{ asset('front-asset/assets/img/about/testimonial2.png') }}"
                                                    alt=""></a>
                                        </div>
                                        <div class="testimonial_content">
                                            <div class="testimonial_icon_img">
                                                <img src="{{ asset('front-asset/assets/img/about/testimonials-icon.png') }}"
                                                    alt="">
                                            </div>
                                            <p>I'm so happy with all of the themes, great support, could not wish for
                                                more.
                                                These people are geniuses! Kudo's from the Netherlands!..</p>
                                            <a href="#">Rebecka Filson</a>
                                        </div>
                                    </div>
                                    <div class="single_testimonial">
                                        <div class="testimonial_thumb">
                                            <a href="#"><img
                                                    src="{{ asset('front-asset/assets/img/about/testimonial3.png') }}"
                                                    alt=""></a>
                                        </div>
                                        <div class="testimonial_content">
                                            <div class="testimonial_icon_img">
                                                <img src="{{ asset('front-asset/assets/img/about/testimonials-icon.png') }}"
                                                    alt="">
                                            </div>
                                            <p>I'm so happy with all of the themes, great support, could not wish for
                                                more.
                                                These people are geniuses! Kudo's from the Netherlands!..</p>
                                            <a href="#">Amber Laha</a>
                                        </div>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <!--testimonial area end-->
                </div>
            </div>
        </div>
    </div>
    <!--testimonial area end-->
</x-front-app-layout>
