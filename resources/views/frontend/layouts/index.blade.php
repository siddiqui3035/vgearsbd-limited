<x-front-app-layout>
    <!--slider area start-->
    <section class="slider_section">
        <div class="slider_area owl-carousel">
            @forelse ($banners as $banner)
                <div class="single_slider d-flex align-items-center" data-bgimg="{{ asset($banner->image) }}">
                    <div class="container h-100">
                        <div class="row h-100 align-items-end">
                            <div class="col-lg-6">
                                <div class="slider_content">
                                    {{-- <h1 class="text-white">{{ $banner->title_one }}</h1> --}}
                                    {{-- <h2 class="text-white"> --}}
                                        {{-- <strong>
                                            {{ $banner->title_two }}
                                        </strong> --}}
                                    {{-- </h2> --}}
                                    {{-- <p class="text-white"> --}}
                                        {{-- <strong>
                                            {{ $banner->short_details }}
                                        </strong> --}}
                                    {{-- </p> --}}
                                    <a href="{{ route('products') }}" class="mb-4">Read more </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="single_slider d-flex align-items-center"
                    data-bgimg="{{ asset('front-asset/assets/img/slider/slider2.jpg') }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider_content">
                                    <h1>Fresh Vegetables</h1>
                                    <h2>Natural Farm Products</h2>
                                    <p>
                                        Widest range of farm-fresh Vegetables, Fruits & seasonal produce
                                    </p>
                                    <a href="shop.html">Read more </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single_slider d-flex align-items-center"
                    data-bgimg="{{ asset('front-asset/assets/img/slider/slider3.jpg') }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider_content">
                                    <h1>Fresh Tomatoes</h1>
                                    <h2>Natural Farm Products</h2>
                                    <p>
                                        Natural organic tomatoes make your health stronger. Put your information here
                                    </p>
                                    <a href="shop.html">Read more </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single_slider d-flex align-items-center"
                    data-bgimg="{{ asset('front-asset/assets/img/slider/slider3.jpg') }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider_content">
                                    <h1>Fresh Tomatoes</h1>
                                    <h2>Natural Farm Products</h2>
                                    <p>
                                        Natural organic tomatoes make your health stronger. Put your information here
                                    </p>
                                    <a href="shop.html">Read more </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforelse

        </div>
        {{-- <div class="slider">
            @forelse ($banners as $banner)
                <div class="slides">
                    <img src="{{ asset($banner->image) }}">
                </div>
            @empty
                <div class="slides">
                    <img src="{{ asset('front-asset/assets/img/slider/slider3.jpg') }}">
                    <img src="{{ asset('front-asset/assets/img/slider/slider2.jpg') }}">
                    <img src="{{ asset('front-asset/assets/img/slider/slider3.jpg') }}">
                </div>
            @endforelse
            <button class="prev">&#10094;</button>
            <button class="next">&#10095;</button>
        </div> --}}
    </section>
    <!--slider area end-->

    <!--shipping area start-->
    <div class="shipping_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src="{{ asset('front-asset/assets/img/about/shipping1.jpg') }}" alt="">
                        </div>
                        <div class="shipping_content">
                            <h3>Free Shipping</h3>
                            <p>Free shipping on all US order or order above $200</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_shipping col_2">
                        <div class="shipping_icone">
                            <img src="{{ asset('front-asset/assets/img/about/shipping2.jpg') }}" alt="">
                        </div>
                        <div class="shipping_content">
                            <h3>Support 24/7</h3>
                            <p>Contact us 24 hours a day, 7 days a week</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_shipping col_3">
                        <div class="shipping_icone">
                            <img src="{{ asset('front-asset/assets/img/about/shipping3.jpg') }}" alt="">
                        </div>
                        <div class="shipping_content">
                            <h3>30 Days Return</h3>
                            <p>Simply return it within 30 days for an exchange</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_shipping col_4">
                        <div class="shipping_icone">
                            <img src="{{ asset('front-asset/assets/img/about/shipping4.jpg') }}" alt="">
                        </div>
                        <div class="shipping_content">
                            <h3>100% Payment Secure</h3>
                            <p>We ensure secure payment with PEV</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--shipping area end-->

    <!--product area start-->
    <div class="product_area  mb-64">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_header">
                        <div class="section_title">
                            <p>Recently added our store</p>
                            <h2>Trending Products</h2>
                        </div>
                        <div class="product_tab_btn">
                            <ul class="nav" role="tablist" id="nav-tab">
                                <li>
                                    <a class="active" data-toggle="tab" href="#plant1" role="tab"
                                        aria-controls="plant1" aria-selected="true">
                                        Lubricant
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#plant2" role="tab" aria-controls="plant2"
                                        aria-selected="false">
                                        Oil
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#plant3" role="tab" aria-controls="plant3"
                                        aria-selected="false">
                                        Organic food
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product_container">
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="plant1" role="tabpanel">
                                <div class="product_carousel product_column5 owl-carousel">
                                    @forelse ($products as $product)
                                    @if ($product->packaging_type == 0)
                                        <div class="product_items">
                                                <article class="single_product">
                                                    <figure>
                                                        <div class="product_thumb">
                                                            <a class="primary_img"
                                                                href="{{ route('product.details', $product->id) }}"><img
                                                                    src="{{ asset($product->thumble) }}"
                                                                    style="height: 250px!important"
                                                                    alt=""></a>
                                                            <a class="secondary_img"
                                                                href="{{ route('product.details', $product->id) }}"><img
                                                                    src="{{ asset($product->thumble) }}"
                                                                    style="height: 250px!important"
                                                                    alt=""></a>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li class="add_to_cart"><a
                                                                            href="{{ route('product.details', $product->id) }}"
                                                                            data-tippy="Add to cart"
                                                                            data-tippy-placement="top"
                                                                            data-tippy-arrow="true"
                                                                            data-tippy-inertia="true">
                                                                            <span class="lnr lnr-cart"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <figcaption class="product_content">
                                                            <h4 class="product_name"><a
                                                                    href="{{ route('product.details', $product->id) }}">{{ $product->name }}</a>
                                                            </h4>
                                                            <p><a href="#">{{ $product->category->name }}</a>
                                                            </p>
                                                            <div class="price_box">
                                                                <span
                                                                    class="current_price">BDT&nbsp;{{ $product->sale_price }}.00</span>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </article>
                                                <article class="single_product">
                                                    <figure>
                                                        <div class="product_thumb">
                                                            <a class="primary_img"
                                                                href="{{ route('product.details', $product->id) }}"><img
                                                                    src="{{ asset($product->thumble) }}"
                                                                    style="height: 250px!important"
                                                                    alt=""></a>
                                                            <a class="secondary_img"
                                                                href="{{ route('product.details', $product->id) }}"><img
                                                                    src="{{ asset($product->thumble) }}"
                                                                    style="height: 250px!important"
                                                                    alt=""></a>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li class="add_to_cart"><a
                                                                            href="{{ route('product.details', $product->id) }}"
                                                                            data-tippy="Add to cart"
                                                                            data-tippy-placement="top"
                                                                            data-tippy-arrow="true"
                                                                            data-tippy-inertia="true">
                                                                            <span class="lnr lnr-cart"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <figcaption class="product_content">
                                                            <h4 class="product_name"><a
                                                                    href="{{ route('product.details', $product->id) }}">{{ $product->name }}</a>
                                                            </h4>
                                                            <p><a href="#">{{ $product->category->name }}</a>
                                                            </p>
                                                            <div class="price_box">
                                                                <span
                                                                    class="current_price">BDT&nbsp;{{ $product->sale_price }}.00</span>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </article>
                                            </div>
                                            @endif
                                    @empty
                                        <div class="product_items">
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>

                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        data-tippy="Add to cart"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"> <span
                                                                            class="lnr lnr-cart"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        data-tippy="quick view"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box"> <span
                                                                            class="lnr lnr-magnifier"></span></a></li>
                                                                <li class="wishlist"><a href="wishlist.html"
                                                                        data-tippy="Add to Wishlist"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-heart"></span></a></li>
                                                                <li class="compare"><a href="#"
                                                                        data-tippy="Add to Compare"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-sync"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a href="product-details.html">Etiam
                                                                Gravida</a></h4>
                                                        <p><a href="#">Fruits</a></p>
                                                        <div class="price_box">
                                                            <span class="current_price">$56.00</span>
                                                            <span class="old_price">$322.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/4.jpeg') }}"
                                                                alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/4.jpeg') }}"
                                                                alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>
                                                            <span class="label_new">New</span>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        data-tippy="Add to cart"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"> <span
                                                                            class="lnr lnr-cart"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        data-tippy="quick view"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box"> <span
                                                                            class="lnr lnr-magnifier"></span></a></li>
                                                                <li class="wishlist"><a href="wishlist.html"
                                                                        data-tippy="Add to Wishlist"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-heart"></span></a></li>
                                                                <li class="compare"><a href="#"
                                                                        data-tippy="Add to Compare"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-sync"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a href="product-details.html">Fusce
                                                                Aliquam</a></h4>
                                                        <p><a href="#">Fruits</a></p>
                                                        <div class="price_box">
                                                            <span class="current_price">$66.00</span>
                                                            <span class="old_price">$312.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                        <div class="product_items">
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        data-tippy="Add to cart"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"> <span
                                                                            class="lnr lnr-cart"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        data-tippy="quick view"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box"> <span
                                                                            class="lnr lnr-magnifier"></span></a></li>
                                                                <li class="wishlist"><a href="wishlist.html"
                                                                        data-tippy="Add to Wishlist"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-heart"></span></a></li>
                                                                <li class="compare"><a href="#"
                                                                        data-tippy="Add to Compare"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-sync"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a
                                                                href="product-details.html">Letraset
                                                                Sheets</a></h4>
                                                        <p><a href="#">Fruits</a></p>
                                                        <div class="price_box">
                                                            <span class="current_price">$38.00</span>
                                                            <span class="old_price">$262.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>
                                                            <span class="label_new">New</span>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        data-tippy="Add to cart"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"> <span
                                                                            class="lnr lnr-cart"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        data-tippy="quick view"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box"> <span
                                                                            class="lnr lnr-magnifier"></span></a></li>
                                                                <li class="wishlist"><a href="wishlist.html"
                                                                        data-tippy="Add to Wishlist"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-heart"></span></a></li>
                                                                <li class="compare"><a href="#"
                                                                        data-tippy="Add to Compare"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-sync"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a href="product-details.html">Lorem
                                                                Ipsum Lec</a></h4>
                                                        <p><a href="#">Fruits</a></p>
                                                        <div class="price_box">
                                                            <span class="current_price">$36.00</span>
                                                            <span class="old_price">$145.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                        <div class="product_items">
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>
                                                            <span class="label_new">New</span>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        data-tippy="Add to cart"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"> <span
                                                                            class="lnr lnr-cart"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        data-tippy="quick view"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box"> <span
                                                                            class="lnr lnr-magnifier"></span></a></li>
                                                                <li class="wishlist"><a href="wishlist.html"
                                                                        data-tippy="Add to Wishlist"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-heart"></span></a></li>
                                                                <li class="compare"><a href="#"
                                                                        data-tippy="Add to Compare"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-sync"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a href="product-details.html">Mauris
                                                                Vel
                                                                Tellus</a></h4>
                                                        <p><a href="#">Fruits</a></p>
                                                        <div class="price_box">
                                                            <span class="current_price">$48.00</span>
                                                            <span class="old_price">$257.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        data-tippy="Add to cart"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"> <span
                                                                            class="lnr lnr-cart"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        data-tippy="quick view"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box"> <span
                                                                            class="lnr lnr-magnifier"></span></a></li>
                                                                <li class="wishlist"><a href="wishlist.html"
                                                                        data-tippy="Add to Wishlist"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-heart"></span></a></li>
                                                                <li class="compare"><a href="#"
                                                                        data-tippy="Add to Compare"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-sync"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a href="product-details.html">Nunc
                                                                Neque
                                                                Eros</a></h4>
                                                        <p><a href="#">Fruits</a></p>
                                                        <div class="price_box">
                                                            <span class="current_price">$35.00</span>
                                                            <span class="old_price">$245.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                        <div class="product_items">
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        data-tippy="Add to cart"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"> <span
                                                                            class="lnr lnr-cart"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        data-tippy="quick view"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box"> <span
                                                                            class="lnr lnr-magnifier"></span></a></li>
                                                                <li class="wishlist"><a href="wishlist.html"
                                                                        data-tippy="Add to Wishlist"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-heart"></span></a></li>
                                                                <li class="compare"><a href="#"
                                                                        data-tippy="Add to Compare"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-sync"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a href="product-details.html">Proin
                                                                Lectus Ipsum</a></h4>
                                                        <p><a href="#">Fruits</a></p>
                                                        <div class="price_box">
                                                            <span class="current_price">$26.00</span>
                                                            <span class="old_price">$362.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>
                                                            <span class="label_new">New</span>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        data-tippy="Add to cart"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"> <span
                                                                            class="lnr lnr-cart"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        data-tippy="quick view"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box"> <span
                                                                            class="lnr lnr-magnifier"></span></a></li>
                                                                <li class="wishlist"><a href="wishlist.html"
                                                                        data-tippy="Add to Wishlist"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-heart"></span></a></li>
                                                                <li class="compare"><a href="#"
                                                                        data-tippy="Add to Compare"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-sync"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a
                                                                href="product-details.html">Quisque
                                                                In Arcu</a></h4>
                                                        <p><a href="#">Fruits</a></p>
                                                        <div class="price_box">
                                                            <span class="current_price">$55.00</span>
                                                            <span class="old_price">$235.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                        <div class="product_items">
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        data-tippy="Add to cart"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"> <span
                                                                            class="lnr lnr-cart"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        data-tippy="quick view"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box"> <span
                                                                            class="lnr lnr-magnifier"></span></a></li>
                                                                <li class="wishlist"><a href="wishlist.html"
                                                                        data-tippy="Add to Wishlist"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-heart"></span></a></li>
                                                                <li class="compare"><a href="#"
                                                                        data-tippy="Add to Compare"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-sync"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a href="product-details.html">Cas
                                                                Meque Metus</a></h4>
                                                        <p><a href="#">Fruits</a></p>
                                                        <div class="price_box">
                                                            <span class="current_price">$26.00</span>
                                                            <span class="old_price">$362.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        data-tippy="Add to cart"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"> <span
                                                                            class="lnr lnr-cart"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        data-tippy="quick view"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box"> <span
                                                                            class="lnr lnr-magnifier"></span></a></li>
                                                                <li class="wishlist"><a href="wishlist.html"
                                                                        data-tippy="Add to Wishlist"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-heart"></span></a></li>
                                                                <li class="compare"><a href="#"
                                                                        data-tippy="Add to Compare"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-sync"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a
                                                                href="product-details.html">Aliquam
                                                                Consequat</a></h4>
                                                        <p><a href="#">Fruits</a></p>
                                                        <div class="price_box">
                                                            <span class="current_price">$26.00</span>
                                                            <span class="old_price">$362.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                            <div class="tab-pane fade" id="plant2" role="tabpanel">
                                <div class="product_carousel product_column5 owl-carousel">
                                    @forelse ($products as $product)
                                    @if ($product->packaging_type == 0)
                                        <div class="product_items">
                                                <article class="single_product">
                                                    <figure>
                                                        <div class="product_thumb">
                                                            <a class="primary_img"
                                                                href="{{ route('product.details', $product->id) }}"><img
                                                                    src="{{ asset($product->thumble) }}"
                                                                    style="height: 250px!important"
                                                                    alt=""></a>
                                                            <a class="secondary_img"
                                                                href="{{ route('product.details', $product->id) }}"><img
                                                                    src="{{ asset($product->thumble) }}"
                                                                    style="height: 250px!important"
                                                                    alt=""></a>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li class="add_to_cart"><a
                                                                            href="{{ route('product.details', $product->id) }}"
                                                                            data-tippy="Add to cart"
                                                                            data-tippy-placement="top"
                                                                            data-tippy-arrow="true"
                                                                            data-tippy-inertia="true">
                                                                            <span class="lnr lnr-cart"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <figcaption class="product_content">
                                                            <h4 class="product_name"><a
                                                                    href="{{ route('product.details', $product->id) }}">{{ $product->name }}</a>
                                                            </h4>
                                                            <p><a href="#">{{ $product->category->name }}</a>
                                                            </p>
                                                            <div class="price_box">
                                                                <span
                                                                    class="current_price">BDT&nbsp;{{ $product->sale_price }}.00</span>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </article>
                                                <article class="single_product">
                                                    <figure>
                                                        <div class="product_thumb">
                                                            <a class="primary_img"
                                                                href="{{ route('product.details', $product->id) }}"><img
                                                                    src="{{ asset($product->thumble) }}"
                                                                    style="height: 250px!important"
                                                                    alt=""></a>
                                                            <a class="secondary_img"
                                                                href="{{ route('product.details', $product->id) }}"><img
                                                                    src="{{ asset($product->thumble) }}"
                                                                    style="height: 250px!important"
                                                                    alt=""></a>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li class="add_to_cart"><a
                                                                            href="{{ route('product.details', $product->id) }}"
                                                                            data-tippy="Add to cart"
                                                                            data-tippy-placement="top"
                                                                            data-tippy-arrow="true"
                                                                            data-tippy-inertia="true">
                                                                            <span class="lnr lnr-cart"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <figcaption class="product_content">
                                                            <h4 class="product_name"><a
                                                                    href="{{ route('product.details', $product->id) }}">{{ $product->name }}</a>
                                                            </h4>
                                                            <p><a href="#">{{ $product->category->name }}</a>
                                                            </p>
                                                            <div class="price_box">
                                                                <span
                                                                    class="current_price">BDT&nbsp;{{ $product->sale_price }}.00</span>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </article>
                                            </div>
                                            @endif
                                    @empty
                                        <div class="product_items">
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>

                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        data-tippy="Add to cart"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"> <span
                                                                            class="lnr lnr-cart"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        data-tippy="quick view"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box"> <span
                                                                            class="lnr lnr-magnifier"></span></a></li>
                                                                <li class="wishlist"><a href="wishlist.html"
                                                                        data-tippy="Add to Wishlist"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-heart"></span></a></li>
                                                                <li class="compare"><a href="#"
                                                                        data-tippy="Add to Compare"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-sync"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a href="product-details.html">Etiam
                                                                Gravida</a></h4>
                                                        <p><a href="#">Fruits</a></p>
                                                        <div class="price_box">
                                                            <span class="current_price">$56.00</span>
                                                            <span class="old_price">$322.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/4.jpeg') }}"
                                                                alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/4.jpeg') }}"
                                                                alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>
                                                            <span class="label_new">New</span>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        data-tippy="Add to cart"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"> <span
                                                                            class="lnr lnr-cart"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        data-tippy="quick view"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box"> <span
                                                                            class="lnr lnr-magnifier"></span></a></li>
                                                                <li class="wishlist"><a href="wishlist.html"
                                                                        data-tippy="Add to Wishlist"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-heart"></span></a></li>
                                                                <li class="compare"><a href="#"
                                                                        data-tippy="Add to Compare"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-sync"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a href="product-details.html">Fusce
                                                                Aliquam</a></h4>
                                                        <p><a href="#">Fruits</a></p>
                                                        <div class="price_box">
                                                            <span class="current_price">$66.00</span>
                                                            <span class="old_price">$312.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                        <div class="product_items">
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        data-tippy="Add to cart"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"> <span
                                                                            class="lnr lnr-cart"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        data-tippy="quick view"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box"> <span
                                                                            class="lnr lnr-magnifier"></span></a></li>
                                                                <li class="wishlist"><a href="wishlist.html"
                                                                        data-tippy="Add to Wishlist"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-heart"></span></a></li>
                                                                <li class="compare"><a href="#"
                                                                        data-tippy="Add to Compare"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-sync"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a
                                                                href="product-details.html">Letraset
                                                                Sheets</a></h4>
                                                        <p><a href="#">Fruits</a></p>
                                                        <div class="price_box">
                                                            <span class="current_price">$38.00</span>
                                                            <span class="old_price">$262.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>
                                                            <span class="label_new">New</span>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        data-tippy="Add to cart"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"> <span
                                                                            class="lnr lnr-cart"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        data-tippy="quick view"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box"> <span
                                                                            class="lnr lnr-magnifier"></span></a></li>
                                                                <li class="wishlist"><a href="wishlist.html"
                                                                        data-tippy="Add to Wishlist"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-heart"></span></a></li>
                                                                <li class="compare"><a href="#"
                                                                        data-tippy="Add to Compare"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-sync"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a href="product-details.html">Lorem
                                                                Ipsum Lec</a></h4>
                                                        <p><a href="#">Fruits</a></p>
                                                        <div class="price_box">
                                                            <span class="current_price">$36.00</span>
                                                            <span class="old_price">$145.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                        <div class="product_items">
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>
                                                            <span class="label_new">New</span>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        data-tippy="Add to cart"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"> <span
                                                                            class="lnr lnr-cart"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        data-tippy="quick view"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box"> <span
                                                                            class="lnr lnr-magnifier"></span></a></li>
                                                                <li class="wishlist"><a href="wishlist.html"
                                                                        data-tippy="Add to Wishlist"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-heart"></span></a></li>
                                                                <li class="compare"><a href="#"
                                                                        data-tippy="Add to Compare"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-sync"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a href="product-details.html">Mauris
                                                                Vel
                                                                Tellus</a></h4>
                                                        <p><a href="#">Fruits</a></p>
                                                        <div class="price_box">
                                                            <span class="current_price">$48.00</span>
                                                            <span class="old_price">$257.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        data-tippy="Add to cart"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"> <span
                                                                            class="lnr lnr-cart"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        data-tippy="quick view"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box"> <span
                                                                            class="lnr lnr-magnifier"></span></a></li>
                                                                <li class="wishlist"><a href="wishlist.html"
                                                                        data-tippy="Add to Wishlist"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-heart"></span></a></li>
                                                                <li class="compare"><a href="#"
                                                                        data-tippy="Add to Compare"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-sync"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a href="product-details.html">Nunc
                                                                Neque
                                                                Eros</a></h4>
                                                        <p><a href="#">Fruits</a></p>
                                                        <div class="price_box">
                                                            <span class="current_price">$35.00</span>
                                                            <span class="old_price">$245.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                        <div class="product_items">
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        data-tippy="Add to cart"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"> <span
                                                                            class="lnr lnr-cart"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        data-tippy="quick view"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box"> <span
                                                                            class="lnr lnr-magnifier"></span></a></li>
                                                                <li class="wishlist"><a href="wishlist.html"
                                                                        data-tippy="Add to Wishlist"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-heart"></span></a></li>
                                                                <li class="compare"><a href="#"
                                                                        data-tippy="Add to Compare"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-sync"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a href="product-details.html">Proin
                                                                Lectus Ipsum</a></h4>
                                                        <p><a href="#">Fruits</a></p>
                                                        <div class="price_box">
                                                            <span class="current_price">$26.00</span>
                                                            <span class="old_price">$362.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>
                                                            <span class="label_new">New</span>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        data-tippy="Add to cart"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"> <span
                                                                            class="lnr lnr-cart"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        data-tippy="quick view"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box"> <span
                                                                            class="lnr lnr-magnifier"></span></a></li>
                                                                <li class="wishlist"><a href="wishlist.html"
                                                                        data-tippy="Add to Wishlist"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-heart"></span></a></li>
                                                                <li class="compare"><a href="#"
                                                                        data-tippy="Add to Compare"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-sync"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a
                                                                href="product-details.html">Quisque
                                                                In Arcu</a></h4>
                                                        <p><a href="#">Fruits</a></p>
                                                        <div class="price_box">
                                                            <span class="current_price">$55.00</span>
                                                            <span class="old_price">$235.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                        <div class="product_items">
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        data-tippy="Add to cart"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"> <span
                                                                            class="lnr lnr-cart"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        data-tippy="quick view"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box"> <span
                                                                            class="lnr lnr-magnifier"></span></a></li>
                                                                <li class="wishlist"><a href="wishlist.html"
                                                                        data-tippy="Add to Wishlist"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-heart"></span></a></li>
                                                                <li class="compare"><a href="#"
                                                                        data-tippy="Add to Compare"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-sync"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a href="product-details.html">Cas
                                                                Meque Metus</a></h4>
                                                        <p><a href="#">Fruits</a></p>
                                                        <div class="price_box">
                                                            <span class="current_price">$26.00</span>
                                                            <span class="old_price">$362.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        data-tippy="Add to cart"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"> <span
                                                                            class="lnr lnr-cart"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        data-tippy="quick view"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box"> <span
                                                                            class="lnr lnr-magnifier"></span></a></li>
                                                                <li class="wishlist"><a href="wishlist.html"
                                                                        data-tippy="Add to Wishlist"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-heart"></span></a></li>
                                                                <li class="compare"><a href="#"
                                                                        data-tippy="Add to Compare"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-sync"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a
                                                                href="product-details.html">Aliquam
                                                                Consequat</a></h4>
                                                        <p><a href="#">Fruits</a></p>
                                                        <div class="price_box">
                                                            <span class="current_price">$26.00</span>
                                                            <span class="old_price">$362.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    @endforelse
                                    {{-- <div class="product_items">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                            alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">Sale</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    data-tippy="Add to cart"
                                                                    data-tippy-placement="top" data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"> <span
                                                                        class="lnr lnr-cart"></span></a></li>
                                                            <li class="quick_button"><a href="#"
                                                                    data-tippy="quick view" data-tippy-placement="top"
                                                                    data-tippy-arrow="true" data-tippy-inertia="true"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modal_box"> <span
                                                                        class="lnr lnr-magnifier"></span></a></li>
                                                            <li class="wishlist"><a href="wishlist.html"
                                                                    data-tippy="Add to Wishlist"
                                                                    data-tippy-placement="top" data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-heart"></span></a></li>
                                                            <li class="compare"><a href="#"
                                                                    data-tippy="Add to Compare"
                                                                    data-tippy-placement="top" data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-sync"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name"><a href="product-details.html">Proin
                                                            Lectus Ipsum</a></h4>
                                                    <p><a href="#">Fruits</a></p>
                                                    <div class="price_box">
                                                        <span class="current_price">$26.00</span>
                                                        <span class="old_price">$362.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                            alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">Sale</span>
                                                        <span class="label_new">New</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    data-tippy="Add to cart"
                                                                    data-tippy-placement="top" data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"> <span
                                                                        class="lnr lnr-cart"></span></a></li>
                                                            <li class="quick_button"><a href="#"
                                                                    data-tippy="quick view" data-tippy-placement="top"
                                                                    data-tippy-arrow="true" data-tippy-inertia="true"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modal_box"> <span
                                                                        class="lnr lnr-magnifier"></span></a></li>
                                                            <li class="wishlist"><a href="wishlist.html"
                                                                    data-tippy="Add to Wishlist"
                                                                    data-tippy-placement="top" data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-heart"></span></a></li>
                                                            <li class="compare"><a href="#"
                                                                    data-tippy="Add to Compare"
                                                                    data-tippy-placement="top" data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-sync"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name"><a href="product-details.html">Quisque
                                                            In Arcu</a></h4>
                                                    <p><a href="#">Fruits</a></p>
                                                    <div class="price_box">
                                                        <span class="current_price">$55.00</span>
                                                        <span class="old_price">$235.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="product_items">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                            alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">Sale</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    data-tippy="Add to cart"
                                                                    data-tippy-placement="top" data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"> <span
                                                                        class="lnr lnr-cart"></span></a></li>
                                                            <li class="quick_button"><a href="#"
                                                                    data-tippy="quick view" data-tippy-placement="top"
                                                                    data-tippy-arrow="true" data-tippy-inertia="true"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modal_box"> <span
                                                                        class="lnr lnr-magnifier"></span></a></li>
                                                            <li class="wishlist"><a href="wishlist.html"
                                                                    data-tippy="Add to Wishlist"
                                                                    data-tippy-placement="top" data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-heart"></span></a></li>
                                                            <li class="compare"><a href="#"
                                                                    data-tippy="Add to Compare"
                                                                    data-tippy-placement="top" data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-sync"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name"><a href="product-details.html">Cas
                                                            Meque Metus</a></h4>
                                                    <p><a href="#">Fruits</a></p>
                                                    <div class="price_box">
                                                        <span class="current_price">$26.00</span>
                                                        <span class="old_price">$362.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                            alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">Sale</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    data-tippy="Add to cart"
                                                                    data-tippy-placement="top" data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"> <span
                                                                        class="lnr lnr-cart"></span></a></li>
                                                            <li class="quick_button"><a href="#"
                                                                    data-tippy="quick view" data-tippy-placement="top"
                                                                    data-tippy-arrow="true" data-tippy-inertia="true"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modal_box"> <span
                                                                        class="lnr lnr-magnifier"></span></a></li>
                                                            <li class="wishlist"><a href="wishlist.html"
                                                                    data-tippy="Add to Wishlist"
                                                                    data-tippy-placement="top" data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-heart"></span></a></li>
                                                            <li class="compare"><a href="#"
                                                                    data-tippy="Add to Compare"
                                                                    data-tippy-placement="top" data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-sync"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name"><a href="product-details.html">Aliquam
                                                            Consequat</a></h4>
                                                    <p><a href="#">Fruits</a></p>
                                                    <div class="price_box">
                                                        <span class="current_price">$26.00</span>
                                                        <span class="old_price">$362.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="product_items">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                            alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">Sale</span>
                                                        <span class="label_new">New</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    data-tippy="Add to cart"
                                                                    data-tippy-placement="top" data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"> <span
                                                                        class="lnr lnr-cart"></span></a></li>
                                                            <li class="quick_button"><a href="#"
                                                                    data-tippy="quick view" data-tippy-placement="top"
                                                                    data-tippy-arrow="true" data-tippy-inertia="true"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modal_box"> <span
                                                                        class="lnr lnr-magnifier"></span></a></li>
                                                            <li class="wishlist"><a href="wishlist.html"
                                                                    data-tippy="Add to Wishlist"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-heart"></span></a></li>
                                                            <li class="compare"><a href="#"
                                                                    data-tippy="Add to Compare"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-sync"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name"><a href="product-details.html">Aliquam
                                                            Consequat</a></h4>
                                                    <p><a href="#">Fruits</a></p>
                                                    <div class="price_box">
                                                        <span class="current_price">$26.00</span>
                                                        <span class="old_price">$362.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                            alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">Sale</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    data-tippy="Add to cart"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"> <span
                                                                        class="lnr lnr-cart"></span></a></li>
                                                            <li class="quick_button"><a href="#"
                                                                    data-tippy="quick view"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true" data-bs-toggle="modal"
                                                                    data-bs-target="#modal_box"> <span
                                                                        class="lnr lnr-magnifier"></span></a></li>
                                                            <li class="wishlist"><a href="wishlist.html"
                                                                    data-tippy="Add to Wishlist"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-heart"></span></a></li>
                                                            <li class="compare"><a href="#"
                                                                    data-tippy="Add to Compare"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-sync"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name"><a href="product-details.html">Donec
                                                            Non Est</a></h4>
                                                    <p><a href="#">Fruits</a></p>
                                                    <div class="price_box">
                                                        <span class="current_price">$46.00</span>
                                                        <span class="old_price">$382.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="product_items">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                            alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">Sale</span>

                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    data-tippy="Add to cart"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"> <span
                                                                        class="lnr lnr-cart"></span></a></li>
                                                            <li class="quick_button"><a href="#"
                                                                    data-tippy="quick view"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true" data-bs-toggle="modal"
                                                                    data-bs-target="#modal_box"> <span
                                                                        class="lnr lnr-magnifier"></span></a></li>
                                                            <li class="wishlist"><a href="wishlist.html"
                                                                    data-tippy="Add to Wishlist"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-heart"></span></a></li>
                                                            <li class="compare"><a href="#"
                                                                    data-tippy="Add to Compare"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-sync"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name"><a href="product-details.html">Etiam
                                                            Gravida</a></h4>
                                                    <p><a href="#">Fruits</a></p>
                                                    <div class="price_box">
                                                        <span class="current_price">$56.00</span>
                                                        <span class="old_price">$322.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                            alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">Sale</span>
                                                        <span class="label_new">New</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    data-tippy="Add to cart"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"> <span
                                                                        class="lnr lnr-cart"></span></a></li>
                                                            <li class="quick_button"><a href="#"
                                                                    data-tippy="quick view"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true" data-bs-toggle="modal"
                                                                    data-bs-target="#modal_box"> <span
                                                                        class="lnr lnr-magnifier"></span></a></li>
                                                            <li class="wishlist"><a href="wishlist.html"
                                                                    data-tippy="Add to Wishlist"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-heart"></span></a></li>
                                                            <li class="compare"><a href="#"
                                                                    data-tippy="Add to Compare"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-sync"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name"><a href="product-details.html">Fusce
                                                            Aliquam</a></h4>
                                                    <p><a href="#">Fruits</a></p>
                                                    <div class="price_box">
                                                        <span class="current_price">$66.00</span>
                                                        <span class="old_price">$312.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="product_items">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                            alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">Sale</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    data-tippy="Add to cart"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"> <span
                                                                        class="lnr lnr-cart"></span></a></li>
                                                            <li class="quick_button"><a href="#"
                                                                    data-tippy="quick view"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true" data-bs-toggle="modal"
                                                                    data-bs-target="#modal_box"> <span
                                                                        class="lnr lnr-magnifier"></span></a></li>
                                                            <li class="wishlist"><a href="wishlist.html"
                                                                    data-tippy="Add to Wishlist"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-heart"></span></a></li>
                                                            <li class="compare"><a href="#"
                                                                    data-tippy="Add to Compare"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-sync"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name"><a href="product-details.html">Letraset
                                                            Sheets</a></h4>
                                                    <p><a href="#">Fruits</a></p>
                                                    <div class="price_box">
                                                        <span class="current_price">$38.00</span>
                                                        <span class="old_price">$262.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                            alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">Sale</span>
                                                        <span class="label_new">New</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    data-tippy="Add to cart"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"> <span
                                                                        class="lnr lnr-cart"></span></a></li>
                                                            <li class="quick_button"><a href="#"
                                                                    data-tippy="quick view"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true" data-bs-toggle="modal"
                                                                    data-bs-target="#modal_box"> <span
                                                                        class="lnr lnr-magnifier"></span></a></li>
                                                            <li class="wishlist"><a href="wishlist.html"
                                                                    data-tippy="Add to Wishlist"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-heart"></span></a></li>
                                                            <li class="compare"><a href="#"
                                                                    data-tippy="Add to Compare"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-sync"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name"><a href="product-details.html">Lorem
                                                            Ipsum Lec</a></h4>
                                                    <p><a href="#">Fruits</a></p>
                                                    <div class="price_box">
                                                        <span class="current_price">$36.00</span>
                                                        <span class="old_price">$145.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="plant3" role="tabpanel">
                                <div class="product_carousel product_column5 owl-carousel">
                                    @forelse ($products as $product)
                                    @if ($product->packaging_type == 0)
                                        <div class="product_items">
                                                <article class="single_product">
                                                    <figure>
                                                        <div class="product_thumb">
                                                            <a class="primary_img"
                                                                href="{{ route('product.details', $product->id) }}"><img
                                                                    src="{{ asset($product->thumble) }}"
                                                                    style="height: 250px!important"
                                                                    alt=""></a>
                                                            <a class="secondary_img"
                                                                href="{{ route('product.details', $product->id) }}"><img
                                                                    src="{{ asset($product->thumble) }}"
                                                                    style="height: 250px!important"
                                                                    alt=""></a>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li class="add_to_cart"><a
                                                                            href="{{ route('product.details', $product->id) }}"
                                                                            data-tippy="Add to cart"
                                                                            data-tippy-placement="top"
                                                                            data-tippy-arrow="true"
                                                                            data-tippy-inertia="true">
                                                                            <span class="lnr lnr-cart"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <figcaption class="product_content">
                                                            <h4 class="product_name"><a
                                                                    href="{{ route('product.details', $product->id) }}">{{ $product->name }}</a>
                                                            </h4>
                                                            <p><a href="#">{{ $product->category->name }}</a>
                                                            </p>
                                                            <div class="price_box">
                                                                <span
                                                                    class="current_price">BDT&nbsp;{{ $product->sale_price }}.00</span>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </article>
                                                <article class="single_product">
                                                    <figure>
                                                        <div class="product_thumb">
                                                            <a class="primary_img"
                                                                href="{{ route('product.details', $product->id) }}"><img
                                                                    src="{{ asset($product->thumble) }}"
                                                                    style="height: 250px!important"
                                                                    alt=""></a>
                                                            <a class="secondary_img"
                                                                href="{{ route('product.details', $product->id) }}"><img
                                                                    src="{{ asset($product->thumble) }}"
                                                                    style="height: 250px!important"
                                                                    alt=""></a>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li class="add_to_cart"><a
                                                                            href="{{ route('product.details', $product->id) }}"
                                                                            data-tippy="Add to cart"
                                                                            data-tippy-placement="top"
                                                                            data-tippy-arrow="true"
                                                                            data-tippy-inertia="true">
                                                                            <span class="lnr lnr-cart"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <figcaption class="product_content">
                                                            <h4 class="product_name"><a
                                                                    href="{{ route('product.details', $product->id) }}">{{ $product->name }}</a>
                                                            </h4>
                                                            <p><a href="#">{{ $product->category->name }}</a>
                                                            </p>
                                                            <div class="price_box">
                                                                <span
                                                                    class="current_price">BDT&nbsp;{{ $product->sale_price }}.00</span>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </article>
                                            </div>
                                            @endif
                                    @empty
                                        <div class="product_items">
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>

                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        data-tippy="Add to cart"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"> <span
                                                                            class="lnr lnr-cart"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        data-tippy="quick view"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box"> <span
                                                                            class="lnr lnr-magnifier"></span></a></li>
                                                                <li class="wishlist"><a href="wishlist.html"
                                                                        data-tippy="Add to Wishlist"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-heart"></span></a></li>
                                                                <li class="compare"><a href="#"
                                                                        data-tippy="Add to Compare"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-sync"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a href="product-details.html">Etiam
                                                                Gravida</a></h4>
                                                        <p><a href="#">Fruits</a></p>
                                                        <div class="price_box">
                                                            <span class="current_price">$56.00</span>
                                                            <span class="old_price">$322.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/4.jpeg') }}"
                                                                alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/4.jpeg') }}"
                                                                alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>
                                                            <span class="label_new">New</span>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        data-tippy="Add to cart"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"> <span
                                                                            class="lnr lnr-cart"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        data-tippy="quick view"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box"> <span
                                                                            class="lnr lnr-magnifier"></span></a></li>
                                                                <li class="wishlist"><a href="wishlist.html"
                                                                        data-tippy="Add to Wishlist"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-heart"></span></a></li>
                                                                <li class="compare"><a href="#"
                                                                        data-tippy="Add to Compare"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-sync"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a href="product-details.html">Fusce
                                                                Aliquam</a></h4>
                                                        <p><a href="#">Fruits</a></p>
                                                        <div class="price_box">
                                                            <span class="current_price">$66.00</span>
                                                            <span class="old_price">$312.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                        <div class="product_items">
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        data-tippy="Add to cart"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"> <span
                                                                            class="lnr lnr-cart"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        data-tippy="quick view"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box"> <span
                                                                            class="lnr lnr-magnifier"></span></a></li>
                                                                <li class="wishlist"><a href="wishlist.html"
                                                                        data-tippy="Add to Wishlist"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-heart"></span></a></li>
                                                                <li class="compare"><a href="#"
                                                                        data-tippy="Add to Compare"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-sync"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a
                                                                href="product-details.html">Letraset
                                                                Sheets</a></h4>
                                                        <p><a href="#">Fruits</a></p>
                                                        <div class="price_box">
                                                            <span class="current_price">$38.00</span>
                                                            <span class="old_price">$262.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>
                                                            <span class="label_new">New</span>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        data-tippy="Add to cart"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"> <span
                                                                            class="lnr lnr-cart"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        data-tippy="quick view"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box"> <span
                                                                            class="lnr lnr-magnifier"></span></a></li>
                                                                <li class="wishlist"><a href="wishlist.html"
                                                                        data-tippy="Add to Wishlist"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-heart"></span></a></li>
                                                                <li class="compare"><a href="#"
                                                                        data-tippy="Add to Compare"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-sync"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a href="product-details.html">Lorem
                                                                Ipsum Lec</a></h4>
                                                        <p><a href="#">Fruits</a></p>
                                                        <div class="price_box">
                                                            <span class="current_price">$36.00</span>
                                                            <span class="old_price">$145.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                        <div class="product_items">
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>
                                                            <span class="label_new">New</span>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        data-tippy="Add to cart"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"> <span
                                                                            class="lnr lnr-cart"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        data-tippy="quick view"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box"> <span
                                                                            class="lnr lnr-magnifier"></span></a></li>
                                                                <li class="wishlist"><a href="wishlist.html"
                                                                        data-tippy="Add to Wishlist"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-heart"></span></a></li>
                                                                <li class="compare"><a href="#"
                                                                        data-tippy="Add to Compare"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-sync"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a href="product-details.html">Mauris
                                                                Vel
                                                                Tellus</a></h4>
                                                        <p><a href="#">Fruits</a></p>
                                                        <div class="price_box">
                                                            <span class="current_price">$48.00</span>
                                                            <span class="old_price">$257.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        data-tippy="Add to cart"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"> <span
                                                                            class="lnr lnr-cart"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        data-tippy="quick view"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box"> <span
                                                                            class="lnr lnr-magnifier"></span></a></li>
                                                                <li class="wishlist"><a href="wishlist.html"
                                                                        data-tippy="Add to Wishlist"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-heart"></span></a></li>
                                                                <li class="compare"><a href="#"
                                                                        data-tippy="Add to Compare"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-sync"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a href="product-details.html">Nunc
                                                                Neque
                                                                Eros</a></h4>
                                                        <p><a href="#">Fruits</a></p>
                                                        <div class="price_box">
                                                            <span class="current_price">$35.00</span>
                                                            <span class="old_price">$245.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                        <div class="product_items">
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        data-tippy="Add to cart"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"> <span
                                                                            class="lnr lnr-cart"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        data-tippy="quick view"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box"> <span
                                                                            class="lnr lnr-magnifier"></span></a></li>
                                                                <li class="wishlist"><a href="wishlist.html"
                                                                        data-tippy="Add to Wishlist"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-heart"></span></a></li>
                                                                <li class="compare"><a href="#"
                                                                        data-tippy="Add to Compare"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-sync"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a href="product-details.html">Proin
                                                                Lectus Ipsum</a></h4>
                                                        <p><a href="#">Fruits</a></p>
                                                        <div class="price_box">
                                                            <span class="current_price">$26.00</span>
                                                            <span class="old_price">$362.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>
                                                            <span class="label_new">New</span>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        data-tippy="Add to cart"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"> <span
                                                                            class="lnr lnr-cart"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        data-tippy="quick view"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box"> <span
                                                                            class="lnr lnr-magnifier"></span></a></li>
                                                                <li class="wishlist"><a href="wishlist.html"
                                                                        data-tippy="Add to Wishlist"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-heart"></span></a></li>
                                                                <li class="compare"><a href="#"
                                                                        data-tippy="Add to Compare"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-sync"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a
                                                                href="product-details.html">Quisque
                                                                In Arcu</a></h4>
                                                        <p><a href="#">Fruits</a></p>
                                                        <div class="price_box">
                                                            <span class="current_price">$55.00</span>
                                                            <span class="old_price">$235.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                        <div class="product_items">
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        data-tippy="Add to cart"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"> <span
                                                                            class="lnr lnr-cart"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        data-tippy="quick view"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box"> <span
                                                                            class="lnr lnr-magnifier"></span></a></li>
                                                                <li class="wishlist"><a href="wishlist.html"
                                                                        data-tippy="Add to Wishlist"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-heart"></span></a></li>
                                                                <li class="compare"><a href="#"
                                                                        data-tippy="Add to Compare"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-sync"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a href="product-details.html">Cas
                                                                Meque Metus</a></h4>
                                                        <p><a href="#">Fruits</a></p>
                                                        <div class="price_box">
                                                            <span class="current_price">$26.00</span>
                                                            <span class="old_price">$362.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img
                                                                src="{{ asset('front-asset/assets/img/product/2.jpeg') }}"
                                                                alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        data-tippy="Add to cart"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"> <span
                                                                            class="lnr lnr-cart"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        data-tippy="quick view"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box"> <span
                                                                            class="lnr lnr-magnifier"></span></a></li>
                                                                <li class="wishlist"><a href="wishlist.html"
                                                                        data-tippy="Add to Wishlist"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-heart"></span></a></li>
                                                                <li class="compare"><a href="#"
                                                                        data-tippy="Add to Compare"
                                                                        data-tippy-placement="top"
                                                                        data-tippy-arrow="true"
                                                                        data-tippy-inertia="true"><span
                                                                            class="lnr lnr-sync"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a
                                                                href="product-details.html">Aliquam
                                                                Consequat</a></h4>
                                                        <p><a href="#">Fruits</a></p>
                                                        <div class="price_box">
                                                            <span class="current_price">$26.00</span>
                                                            <span class="old_price">$362.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    @endforelse
                                    {{-- <div class="product_items">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/product13.jpg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/product1.jpg') }}"
                                                            alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">Sale</span>
                                                        <span class="label_new">New</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    data-tippy="Add to cart"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"> <span
                                                                        class="lnr lnr-cart"></span></a></li>
                                                            <li class="quick_button"><a href="#"
                                                                    data-tippy="quick view"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true" data-bs-toggle="modal"
                                                                    data-bs-target="#modal_box"> <span
                                                                        class="lnr lnr-magnifier"></span></a></li>
                                                            <li class="wishlist"><a href="wishlist.html"
                                                                    data-tippy="Add to Wishlist"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-heart"></span></a></li>
                                                            <li class="compare"><a href="#"
                                                                    data-tippy="Add to Compare"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-sync"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name"><a href="product-details.html">Mauris
                                                            Vel Tellus</a></h4>
                                                    <p><a href="#">Fruits</a></p>
                                                    <div class="price_box">
                                                        <span class="current_price">$48.00</span>
                                                        <span class="old_price">$257.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/product12.jpg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/product2.jpg') }}"
                                                            alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">Sale</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    data-tippy="Add to cart"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"> <span
                                                                        class="lnr lnr-cart"></span></a></li>
                                                            <li class="quick_button"><a href="#"
                                                                    data-tippy="quick view"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true" data-bs-toggle="modal"
                                                                    data-bs-target="#modal_box"> <span
                                                                        class="lnr lnr-magnifier"></span></a></li>
                                                            <li class="wishlist"><a href="wishlist.html"
                                                                    data-tippy="Add to Wishlist"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-heart"></span></a></li>
                                                            <li class="compare"><a href="#"
                                                                    data-tippy="Add to Compare"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-sync"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name"><a href="product-details.html">Nunc
                                                            Neque Eros</a></h4>
                                                    <p><a href="#">Fruits</a></p>
                                                    <div class="price_box">
                                                        <span class="current_price">$35.00</span>
                                                        <span class="old_price">$245.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="product_items">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/product1.jpg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/product2.jpg') }}"
                                                            alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">Sale</span>
                                                        <span class="label_new">New</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    data-tippy="Add to cart"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"> <span
                                                                        class="lnr lnr-cart"></span></a></li>
                                                            <li class="quick_button"><a href="#"
                                                                    data-tippy="quick view"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true" data-bs-toggle="modal"
                                                                    data-bs-target="#modal_box"> <span
                                                                        class="lnr lnr-magnifier"></span></a></li>
                                                            <li class="wishlist"><a href="wishlist.html"
                                                                    data-tippy="Add to Wishlist"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-heart"></span></a></li>
                                                            <li class="compare"><a href="#"
                                                                    data-tippy="Add to Compare"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-sync"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name"><a href="product-details.html">Aliquam
                                                            Consequat</a></h4>
                                                    <p><a href="#">Fruits</a></p>
                                                    <div class="price_box">
                                                        <span class="current_price">$26.00</span>
                                                        <span class="old_price">$362.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/product3.jpg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/product4.jpg') }}"
                                                            alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">Sale</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    data-tippy="Add to cart"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"> <span
                                                                        class="lnr lnr-cart"></span></a></li>
                                                            <li class="quick_button"><a href="#"
                                                                    data-tippy="quick view"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true" data-bs-toggle="modal"
                                                                    data-bs-target="#modal_box"> <span
                                                                        class="lnr lnr-magnifier"></span></a></li>
                                                            <li class="wishlist"><a href="wishlist.html"
                                                                    data-tippy="Add to Wishlist"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-heart"></span></a></li>
                                                            <li class="compare"><a href="#"
                                                                    data-tippy="Add to Compare"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-sync"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name"><a href="product-details.html">Donec
                                                            Non Est</a></h4>
                                                    <p><a href="#">Fruits</a></p>
                                                    <div class="price_box">
                                                        <span class="current_price">$46.00</span>
                                                        <span class="old_price">$382.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="product_items">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/product5.jpg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/product6.jpg') }}"
                                                            alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">Sale</span>

                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    data-tippy="Add to cart"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"> <span
                                                                        class="lnr lnr-cart"></span></a></li>
                                                            <li class="quick_button"><a href="#"
                                                                    data-tippy="quick view"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true" data-bs-toggle="modal"
                                                                    data-bs-target="#modal_box"> <span
                                                                        class="lnr lnr-magnifier"></span></a></li>
                                                            <li class="wishlist"><a href="wishlist.html"
                                                                    data-tippy="Add to Wishlist"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-heart"></span></a></li>
                                                            <li class="compare"><a href="#"
                                                                    data-tippy="Add to Compare"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-sync"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name"><a href="product-details.html">Etiam
                                                            Gravida</a></h4>
                                                    <p><a href="#">Fruits</a></p>
                                                    <div class="price_box">
                                                        <span class="current_price">$56.00</span>
                                                        <span class="old_price">$322.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/product7.jpg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/product8.jpg') }}"
                                                            alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">Sale</span>
                                                        <span class="label_new">New</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    data-tippy="Add to cart"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"> <span
                                                                        class="lnr lnr-cart"></span></a></li>
                                                            <li class="quick_button"><a href="#"
                                                                    data-tippy="quick view"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true" data-bs-toggle="modal"
                                                                    data-bs-target="#modal_box"> <span
                                                                        class="lnr lnr-magnifier"></span></a></li>
                                                            <li class="wishlist"><a href="wishlist.html"
                                                                    data-tippy="Add to Wishlist"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-heart"></span></a></li>
                                                            <li class="compare"><a href="#"
                                                                    data-tippy="Add to Compare"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-sync"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name"><a href="product-details.html">Fusce
                                                            Aliquam</a></h4>
                                                    <p><a href="#">Fruits</a></p>
                                                    <div class="price_box">
                                                        <span class="current_price">$66.00</span>
                                                        <span class="old_price">$312.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="product_items">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/product9.jpg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/product10.jpg') }}"
                                                            alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">Sale</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    data-tippy="Add to cart"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"> <span
                                                                        class="lnr lnr-cart"></span></a></li>
                                                            <li class="quick_button"><a href="#"
                                                                    data-tippy="quick view"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true" data-bs-toggle="modal"
                                                                    data-bs-target="#modal_box"> <span
                                                                        class="lnr lnr-magnifier"></span></a></li>
                                                            <li class="wishlist"><a href="wishlist.html"
                                                                    data-tippy="Add to Wishlist"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-heart"></span></a></li>
                                                            <li class="compare"><a href="#"
                                                                    data-tippy="Add to Compare"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-sync"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name"><a href="product-details.html">Letraset
                                                            Sheets</a></h4>
                                                    <p><a href="#">Fruits</a></p>
                                                    <div class="price_box">
                                                        <span class="current_price">$38.00</span>
                                                        <span class="old_price">$262.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/product11.jpg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/product12.jpg') }}"
                                                            alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">Sale</span>
                                                        <span class="label_new">New</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    data-tippy="Add to cart"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"> <span
                                                                        class="lnr lnr-cart"></span></a></li>
                                                            <li class="quick_button"><a href="#"
                                                                    data-tippy="quick view"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true" data-bs-toggle="modal"
                                                                    data-bs-target="#modal_box"> <span
                                                                        class="lnr lnr-magnifier"></span></a></li>
                                                            <li class="wishlist"><a href="wishlist.html"
                                                                    data-tippy="Add to Wishlist"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-heart"></span></a></li>
                                                            <li class="compare"><a href="#"
                                                                    data-tippy="Add to Compare"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-sync"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name"><a href="product-details.html">Lorem
                                                            Ipsum Lec</a></h4>
                                                    <p><a href="#">Fruits</a></p>
                                                    <div class="price_box">
                                                        <span class="current_price">$36.00</span>
                                                        <span class="old_price">$145.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="product_items">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/product8.jpg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/product5.jpg') }}"
                                                            alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">Sale</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    data-tippy="Add to cart"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"> <span
                                                                        class="lnr lnr-cart"></span></a></li>
                                                            <li class="quick_button"><a href="#"
                                                                    data-tippy="quick view"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true" data-bs-toggle="modal"
                                                                    data-bs-target="#modal_box"> <span
                                                                        class="lnr lnr-magnifier"></span></a></li>
                                                            <li class="wishlist"><a href="wishlist.html"
                                                                    data-tippy="Add to Wishlist"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-heart"></span></a></li>
                                                            <li class="compare"><a href="#"
                                                                    data-tippy="Add to Compare"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-sync"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name"><a href="product-details.html">Cas
                                                            Meque Metus</a></h4>
                                                    <p><a href="#">Fruits</a></p>
                                                    <div class="price_box">
                                                        <span class="current_price">$26.00</span>
                                                        <span class="old_price">$362.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/product7.jpg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('front-asset/assets/img/product/product6.jpg') }}"
                                                            alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">Sale</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    data-tippy="Add to cart"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"> <span
                                                                        class="lnr lnr-cart"></span></a></li>
                                                            <li class="quick_button"><a href="#"
                                                                    data-tippy="quick view"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true" data-bs-toggle="modal"
                                                                    data-bs-target="#modal_box"> <span
                                                                        class="lnr lnr-magnifier"></span></a></li>
                                                            <li class="wishlist"><a href="wishlist.html"
                                                                    data-tippy="Add to Wishlist"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-heart"></span></a></li>
                                                            <li class="compare"><a href="#"
                                                                    data-tippy="Add to Compare"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"><span
                                                                        class="lnr lnr-sync"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name"><a href="product-details.html">Aliquam
                                                            Consequat</a></h4>
                                                    <p><a href="#">Fruits</a></p>
                                                    <div class="price_box">
                                                        <span class="current_price">$26.00</span>
                                                        <span class="old_price">$362.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product area end-->

    <!--banner area start-->
    <div class="banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="{{ asset('front-asset/assets/img/product/5.jpeg') }}"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="{{ asset('front-asset/assets/img/product/13.jpeg') }}"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--product area start-->
    <div class="product_area product_deals mb-65">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <p>Recently added our store </p>
                        <h2>Deals Of The Weeks</h2>
                    </div>
                </div>
            </div>
            <div class="product_container">
                <div class="row">
                    <div class="col-12">
                        <div class="product_carousel product_column5 owl-carousel">
                            @forelse ($products as $product)
                                @if ($product->packaging_type == 0)
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img"
                                                    href="{{ route('product.details', $product->id) }}"><img
                                                        src="{{ asset($product->thumble) }}"
                                                        style="height: 250px!important" alt=""></a>
                                                <a class="secondary_img"
                                                    href="{{ route('product.details', $product->id) }}"><img
                                                        src="{{ asset($product->thumble) }}"
                                                        style="height: 250px!important" alt=""></a>
                                                {{-- <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                    <span class="label_new">New</span>
                                                </div> --}}
                                                {{-- <div class="product_timing">
                                            <div data-countdown="2021/12/15"></div>
                                        </div> --}}
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a
                                                                href="{{ route('product.details', $product->id) }}"
                                                                data-tippy="Add to cart" data-tippy-placement="top"
                                                                data-tippy-arrow="true" data-tippy-inertia="true">
                                                                <span class="lnr lnr-cart"></span></a></li>
                                                        {{-- <li class="quick_button"><a href="#"
                                                                data-tippy="quick view" data-tippy-placement="top"
                                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="lnr lnr-magnifier"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                data-tippy="Add to Wishlist"
                                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                                data-tippy-inertia="true"><span
                                                                    class="lnr lnr-heart"></span></a></li>
                                                        <li class="compare"><a href="#"
                                                                data-tippy="Add to Compare"
                                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                                data-tippy-inertia="true"><span
                                                                    class="lnr lnr-sync"></span></a></li> --}}
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a
                                                        href="{{ route('product.details', $product->id) }}">{{ $product->name }}</a>
                                                </h4>
                                                <p><a
                                                        href="{{ route('product.details', $product->id) }}">{{ $product->category->name }}</a>
                                                </p>
                                                <div class="price_box">
                                                    <span class="current_price">BDT&nbsp;
                                                        {{ $product->purchase_price }}.00</span>
                                                    {{-- <span class="old_price">$257.00</span> --}}
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                @endif
                            @empty
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/1.jpeg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/1.jpeg') }}"
                                                    alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2021/12/15"></div>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html"
                                                            data-tippy="Add to cart" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"> <span
                                                                class="lnr lnr-cart"></span></a></li>
                                                    <li class="quick_button"><a href="#"
                                                            data-tippy="quick view" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box">
                                                            <span class="lnr lnr-magnifier"></span></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"
                                                            data-tippy="Add to Wishlist" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-heart"></span></a></li>
                                                    <li class="compare"><a href="#"
                                                            data-tippy="Add to Compare" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-sync"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Nunc Neque
                                                    Eros</a>
                                            </h4>
                                            <p><a href="#">Fruits</a></p>
                                            <div class="price_box">
                                                <span class="current_price">$35.00</span>
                                                <span class="old_price">$245.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/1.jpeg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/1.jpeg') }}"
                                                    alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2021/12/15"></div>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html"
                                                            data-tippy="Add to cart" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"> <span
                                                                class="lnr lnr-cart"></span></a></li>
                                                    <li class="quick_button"><a href="#"
                                                            data-tippy="quick view" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box">
                                                            <span class="lnr lnr-magnifier"></span></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"
                                                            data-tippy="Add to Wishlist" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-heart"></span></a></li>
                                                    <li class="compare"><a href="#"
                                                            data-tippy="Add to Compare" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-sync"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Proin Lectus
                                                    Ipsum</a></h4>
                                            <p><a href="#">Fruits</a></p>
                                            <div class="price_box">
                                                <span class="current_price">$26.00</span>
                                                <span class="old_price">$362.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/1.jpeg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/1.jpeg') }}"
                                                    alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2021/12/15"></div>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html"
                                                            data-tippy="Add to cart" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"> <span
                                                                class="lnr lnr-cart"></span></a></li>
                                                    <li class="quick_button"><a href="#"
                                                            data-tippy="quick view" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box">
                                                            <span class="lnr lnr-magnifier"></span></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"
                                                            data-tippy="Add to Wishlist" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-heart"></span></a></li>
                                                    <li class="compare"><a href="#"
                                                            data-tippy="Add to Compare" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-sync"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Quisque In
                                                    Arcu</a>
                                            </h4>
                                            <p><a href="#">Fruits</a></p>
                                            <div class="price_box">
                                                <span class="current_price">$55.00</span>
                                                <span class="old_price">$235.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/1.jpeg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/1.jpeg') }}"
                                                    alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2021/12/15"></div>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html"
                                                            data-tippy="Add to cart" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"> <span
                                                                class="lnr lnr-cart"></span></a></li>
                                                    <li class="quick_button"><a href="#"
                                                            data-tippy="quick view" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box">
                                                            <span class="lnr lnr-magnifier"></span></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"
                                                            data-tippy="Add to Wishlist" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-heart"></span></a></li>
                                                    <li class="compare"><a href="#"
                                                            data-tippy="Add to Compare" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-sync"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Cas Meque
                                                    Metus</a>
                                            </h4>
                                            <p><a href="#">Fruits</a></p>
                                            <div class="price_box">
                                                <span class="current_price">$26.00</span>
                                                <span class="old_price">$362.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/1.jpeg') }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/1.jpeg') }}"
                                                    alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2021/12/15"></div>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html"
                                                            data-tippy="Add to cart" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"> <span
                                                                class="lnr lnr-cart"></span></a></li>
                                                    <li class="quick_button"><a href="#"
                                                            data-tippy="quick view" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box">
                                                            <span class="lnr lnr-magnifier"></span></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"
                                                            data-tippy="Add to Wishlist" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-heart"></span></a></li>
                                                    <li class="compare"><a href="#"
                                                            data-tippy="Add to Compare" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-sync"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Aliquam
                                                    Consequat</a></h4>
                                            <p><a href="#">Fruits</a></p>
                                            <div class="price_box">
                                                <span class="current_price">$26.00</span>
                                                <span class="old_price">$362.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product area end-->

    <!--banner fullwidth area satrt-->
    {{-- <div class="banner_fullwidth">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner_full_content">
                        <p>Black Fridays !</p>
                        <h2>Sale 50% OFf <span>all vegetable products</span></h2>
                        <a href="shop.html">discover now</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--banner fullwidth area end-->

    <!--product banner area satrt-->
    <div class="product_banner_area mb-65">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <p>Recently added our store </p>
                        <h2>Best Sellers</h2>
                    </div>
                </div>
            </div>
            <div class="product_banner_container">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="banner_thumb">
                            <a href="{{ route('products') }}"><img
                                    src="{{ asset('front-asset/assets/img/product/9.jpeg') }}" alt=""
                                    style="height: 700px!important"></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="small_product_area product_carousel  product_column2 owl-carousel">
                            @forelse ($products as $product)
                                @if ($product->packaging_type == 2)
                                    <div class="product_items">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img"
                                                        href="{{ route('product.details', $product->id) }}"><img
                                                            src="{{ asset($product->thumble) }}"
                                                            style="height: 200px!important" alt=""></a>
                                                    <a class="secondary_img"
                                                        href="{{ route('product.details', $product->id) }}"><img
                                                            src="{{ asset($product->thumble) }}"
                                                            style="height: 200px!important" alt=""></a>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a
                                                                    href="{{ route('product.details', $product->id) }}"
                                                                    data-tippy="Add to cart"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"> <span
                                                                        class="lnr lnr-cart"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name"><a
                                                            href="{{ route('product.details', $product->id) }}">{{ $product->name }}</a>
                                                    </h4>
                                                    <p><a
                                                            href="{{ route('product.details', $product->id) }}">{{ $product->category->name }}</a>
                                                    </p>
                                                    <div class="price_box">
                                                        <span class="current_price">BDT&nbsp;
                                                            {{ $product->purchase_price }}</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img"
                                                        href="{{ route('product.details', $product->id) }}"><img
                                                            src="{{ asset($product->thumble) }}"
                                                            style="height: 200px!important" alt=""></a>
                                                    <a class="secondary_img"
                                                        href="{{ route('product.details', $product->id) }}"><img
                                                            src="{{ asset($product->thumble) }}"
                                                            style="height: 200px!important" alt=""></a>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a
                                                                    href="{{ route('product.details', $product->id) }}"
                                                                    data-tippy="Add to cart"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"> <span
                                                                        class="lnr lnr-cart"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name"><a
                                                            href="{{ route('product.details', $product->id) }}">{{ $product->name }}</a>
                                                    </h4>
                                                    <p><a
                                                            href="{{ route('product.details', $product->id) }}">{{ $product->category->name }}</a>
                                                    </p>
                                                    <div class="price_box">
                                                        <span class="current_price">BDT&nbsp;
                                                            {{ $product->purchase_price }}</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img"
                                                        href="{{ route('product.details', $product->id) }}"><img
                                                            src="{{ asset($product->thumble) }}"
                                                            style="height: 200px!important" alt=""></a>
                                                    <a class="secondary_img"
                                                        href="{{ route('product.details', $product->id) }}"><img
                                                            src="{{ asset($product->thumble) }}"
                                                            style="height: 200px!important" alt=""></a>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart"><a
                                                                    href="{{ route('product.details', $product->id) }}"
                                                                    data-tippy="Add to cart"
                                                                    data-tippy-placement="top"
                                                                    data-tippy-arrow="true"
                                                                    data-tippy-inertia="true"> <span
                                                                        class="lnr lnr-cart"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name"><a
                                                            href="{{ route('product.details', $product->id) }}">{{ $product->name }}</a>
                                                    </h4>
                                                    <p><a
                                                            href="{{ route('product.details', $product->id) }}">{{ $product->category->name }}</a>
                                                    </p>
                                                    <div class="price_box">
                                                        <span class="current_price">BDT&nbsp;
                                                            {{ $product->purchase_price }}</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                @endif
                            @empty
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="{{ asset('front-asset/assets/img/product/11.jpeg') }}"
                                                        alt="" style="height: 250px!important"></a>
                                                <a class="secondary_img" href="product-details.html"><img
                                                        src="{{ asset('front-asset/assets/img/product/11.jpeg') }}"
                                                        alt="" style="height: 250px!important"></a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Aliquam
                                                        Consequat</a></h4>
                                                <p><a href="#">Fruits</a></p>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                data-tippy="Add to cart" data-tippy-placement="top"
                                                                data-tippy-arrow="true" data-tippy-inertia="true">
                                                                <span class="lnr lnr-cart"></span></a></li>
                                                        <li class="quick_button"><a href="#"
                                                                data-tippy="quick view" data-tippy-placement="top"
                                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="lnr lnr-magnifier"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                data-tippy="Add to Wishlist"
                                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                                data-tippy-inertia="true"><span
                                                                    class="lnr lnr-heart"></span></a></li>
                                                        <li class="compare"><a href="#"
                                                                data-tippy="Add to Compare"
                                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                                data-tippy-inertia="true"><span
                                                                    class="lnr lnr-sync"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="price_box">
                                                    <span class="current_price">$26.00</span>
                                                    <span class="old_price">$362.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="{{ asset('front-asset/assets/img/product/8.jpeg') }}"
                                                        alt="" style="height: 250px!important"></a>
                                                <a class="secondary_img" href="product-details.html"><img
                                                        src="{{ asset('front-asset/assets/img/product/8.jpeg') }}"
                                                        alt="" style="height: 250px!important"></a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Donec Non
                                                        Est</a></h4>
                                                <p><a href="#">Fruits</a></p>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                data-tippy="Add to cart" data-tippy-placement="top"
                                                                data-tippy-arrow="true" data-tippy-inertia="true">
                                                                <span class="lnr lnr-cart"></span></a></li>
                                                        <li class="quick_button"><a href="#"
                                                                data-tippy="quick view" data-tippy-placement="top"
                                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="lnr lnr-magnifier"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                data-tippy="Add to Wishlist"
                                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                                data-tippy-inertia="true"><span
                                                                    class="lnr lnr-heart"></span></a></li>
                                                        <li class="compare"><a href="#"
                                                                data-tippy="Add to Compare"
                                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                                data-tippy-inertia="true"><span
                                                                    class="lnr lnr-sync"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="price_box">
                                                    <span class="current_price">$46.00</span>
                                                    <span class="old_price">$382.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="{{ asset('front-asset/assets/img/product/9.jpeg') }}"
                                                        alt="" style="height: 250px!important"></a>
                                                <a class="secondary_img" href="product-details.html"><img
                                                        src="{{ asset('front-asset/assets/img/product/9.jpeg') }}"
                                                        alt="" style="height: 250px!important"></a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Mauris Vel
                                                        Tellus</a></h4>
                                                <p><a href="#">Fruits</a></p>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                data-tippy="Add to cart" data-tippy-placement="top"
                                                                data-tippy-arrow="true" data-tippy-inertia="true">
                                                                <span class="lnr lnr-cart"></span></a></li>
                                                        <li class="quick_button"><a href="#"
                                                                data-tippy="quick view" data-tippy-placement="top"
                                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="lnr lnr-magnifier"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                data-tippy="Add to Wishlist"
                                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                                data-tippy-inertia="true"><span
                                                                    class="lnr lnr-heart"></span></a></li>
                                                        <li class="compare"><a href="#"
                                                                data-tippy="Add to Compare"
                                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                                data-tippy-inertia="true"><span
                                                                    class="lnr lnr-sync"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="price_box">
                                                    <span class="current_price">$56.00</span>
                                                    <span class="old_price">$362.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="{{ asset('front-asset/assets/img/product/10.jpeg') }}"
                                                        alt="" style="height: 250px!important"></a>
                                                <a class="secondary_img" href="product-details.html"><img
                                                        src="{{ asset('front-asset/assets/img/product/10.jpeg') }}"
                                                        alt="" style="height: 250px!important"></a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Quisque In
                                                        Arcu</a></h4>
                                                <p><a href="#">Fruits</a></p>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                data-tippy="Add to cart" data-tippy-placement="top"
                                                                data-tippy-arrow="true" data-tippy-inertia="true">
                                                                <span class="lnr lnr-cart"></span></a></li>
                                                        <li class="quick_button"><a href="#"
                                                                data-tippy="quick view" data-tippy-placement="top"
                                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="lnr lnr-magnifier"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                data-tippy="Add to Wishlist"
                                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                                data-tippy-inertia="true"><span
                                                                    class="lnr lnr-heart"></span></a></li>
                                                        <li class="compare"><a href="#"
                                                                data-tippy="Add to Compare"
                                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                                data-tippy-inertia="true"><span
                                                                    class="lnr lnr-sync"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="price_box">
                                                    <span class="current_price">$20.00</span>
                                                    <span class="old_price">$352.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="{{ asset('front-asset/assets/img/product/8.jpeg') }}"
                                                        style="height: 250px!important" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img
                                                        src="{{ asset('front-asset/assets/img/product/8.jpeg') }}"
                                                        style="height: 250px!important" alt=""></a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Cas Meque
                                                        Metus</a></h4>
                                                <p><a href="#">Fruits</a></p>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                data-tippy="Add to cart" data-tippy-placement="top"
                                                                data-tippy-arrow="true" data-tippy-inertia="true">
                                                                <span class="lnr lnr-cart"></span></a></li>
                                                        <li class="quick_button"><a href="#"
                                                                data-tippy="quick view" data-tippy-placement="top"
                                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="lnr lnr-magnifier"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                data-tippy="Add to Wishlist"
                                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                                data-tippy-inertia="true"><span
                                                                    class="lnr lnr-heart"></span></a></li>
                                                        <li class="compare"><a href="#"
                                                                data-tippy="Add to Compare"
                                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                                data-tippy-inertia="true"><span
                                                                    class="lnr lnr-sync"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="price_box">
                                                    <span class="current_price">$72.00</span>
                                                    <span class="old_price">$352.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="{{ asset('front-asset/assets/img/product/8.jpeg') }}"
                                                        alt="" style="height: 250px!important"></a>
                                                <a class="secondary_img" href="product-details.html"><img
                                                        src="{{ asset('front-asset/assets/img/product/8.jpeg') }}"
                                                        alt="" style="height: 250px!important"></a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Proin Lectus
                                                        Ipsum</a></h4>
                                                <p><a href="#">Fruits</a></p>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                data-tippy="Add to cart" data-tippy-placement="top"
                                                                data-tippy-arrow="true" data-tippy-inertia="true">
                                                                <span class="lnr lnr-cart"></span></a></li>
                                                        <li class="quick_button"><a href="#"
                                                                data-tippy="quick view" data-tippy-placement="top"
                                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="lnr lnr-magnifier"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                data-tippy="Add to Wishlist"
                                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                                data-tippy-inertia="true"><span
                                                                    class="lnr lnr-heart"></span></a></li>
                                                        <li class="compare"><a href="#"
                                                                data-tippy="Add to Compare"
                                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                                data-tippy-inertia="true"><span
                                                                    class="lnr lnr-sync"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="price_box">
                                                    <span class="current_price">$36.00</span>
                                                    <span class="old_price">$282.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="{{ asset('front-asset/assets/img/product/8.jpeg') }}"
                                                        alt="" style="height: 250px!important"></a>
                                                <a class="secondary_img" href="product-details.html"><img
                                                        src="{{ asset('front-asset/assets/img/product/8.jpeg') }}"
                                                        alt="" style="height: 250px!important"></a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Mauris Vel
                                                        Tellus</a></h4>
                                                <p><a href="#">Fruits</a></p>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                data-tippy="Add to cart" data-tippy-placement="top"
                                                                data-tippy-arrow="true" data-tippy-inertia="true">
                                                                <span class="lnr lnr-cart"></span></a></li>
                                                        <li class="quick_button"><a href="#"
                                                                data-tippy="quick view" data-tippy-placement="top"
                                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="lnr lnr-magnifier"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                data-tippy="Add to Wishlist"
                                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                                data-tippy-inertia="true"><span
                                                                    class="lnr lnr-heart"></span></a></li>
                                                        <li class="compare"><a href="#"
                                                                data-tippy="Add to Compare"
                                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                                data-tippy-inertia="true"><span
                                                                    class="lnr lnr-sync"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="price_box">
                                                    <span class="current_price">$45.00</span>
                                                    <span class="old_price">$162.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="{{ asset('front-asset/assets/img/product/11.jpeg') }}"
                                                        alt="" style="height: 250px!important"></a>
                                                <a class="secondary_img" href="product-details.html"><img
                                                        src="{{ asset('front-asset/assets/img/product/11.jpeg') }}"
                                                        alt="" style="height: 250px!important"></a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Donec Non
                                                        Est</a></h4>
                                                <p><a href="#">Fruits</a></p>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                data-tippy="Add to cart" data-tippy-placement="top"
                                                                data-tippy-arrow="true" data-tippy-inertia="true">
                                                                <span class="lnr lnr-cart"></span></a></li>
                                                        <li class="quick_button"><a href="#"
                                                                data-tippy="quick view" data-tippy-placement="top"
                                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="lnr lnr-magnifier"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                data-tippy="Add to Wishlist"
                                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                                data-tippy-inertia="true"><span
                                                                    class="lnr lnr-heart"></span></a></li>
                                                        <li class="compare"><a href="#"
                                                                data-tippy="Add to Compare"
                                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                                data-tippy-inertia="true"><span
                                                                    class="lnr lnr-sync"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="price_box">
                                                    <span class="current_price">$46.00</span>
                                                    <span class="old_price">$382.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="{{ asset('front-asset/assets/img/product/10.jpeg') }}"
                                                        alt="" style="height: 250px!important"></a>
                                                <a class="secondary_img" href="product-details.html"><img
                                                        src="{{ asset('front-asset/assets/img/product/10.jpeg') }}"
                                                        alt="" style="height: 250px!important"></a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Donec Non
                                                        Est</a></h4>
                                                <p><a href="#">Fruits</a></p>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                data-tippy="Add to cart" data-tippy-placement="top"
                                                                data-tippy-arrow="true" data-tippy-inertia="true">
                                                                <span class="lnr lnr-cart"></span></a></li>
                                                        <li class="quick_button"><a href="#"
                                                                data-tippy="quick view" data-tippy-placement="top"
                                                                data-tippy-arrow="true" data-tippy-inertia="true"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="lnr lnr-magnifier"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                data-tippy="Add to Wishlist"
                                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                                data-tippy-inertia="true"><span
                                                                    class="lnr lnr-heart"></span></a></li>
                                                        <li class="compare"><a href="#"
                                                                data-tippy="Add to Compare"
                                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                                data-tippy-inertia="true"><span
                                                                    class="lnr lnr-sync"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="price_box">
                                                    <span class="current_price">$46.00</span>
                                                    <span class="old_price">$382.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product banner area end-->

    <!--product area start-->
    <div class="product_area mb-65">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <p>Recently added our store </p>
                        <h2>Mostview Products</h2>
                    </div>
                </div>
            </div>
            <div class="product_container">
                <div class="row">
                    <div class="col-12">
                        <div class="product_carousel product_column5 owl-carousel">
                            @forelse ($products as $product)
                                @if ($product->packaging_type == 0)
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img"
                                                    href="{{ route('product.details', $product->id) }}"><img
                                                        src="{{ asset($product->thumble) }}"
                                                        style="height: 200px!important" alt=""></a>
                                                <a class="secondary_img"
                                                    href="{{ route('product.details', $product->id) }}"><img
                                                        src="{{ asset($product->thumble) }}"
                                                        style="height: 200px!important" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a
                                                                href="{{ route('product.details', $product->id) }}"
                                                                data-tippy="Add to cart" data-tippy-placement="top"
                                                                data-tippy-arrow="true" data-tippy-inertia="true">
                                                                <span class="lnr lnr-cart"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a
                                                        href="{{ route('product.details', $product->id) }}">{{ $product->name }}</a>
                                                </h4>
                                                <p><a
                                                        href="{{ route('product.details', $product->id) }}">{{ $product->category->name }}</a>
                                                </p>
                                                <div class="price_box">
                                                    <span class="current_price">BDT&nbsp;
                                                        {{ $product->purchase_price }}</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                @endif
                            @empty
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/1.jpeg') }}"
                                                    alt="" style="height: 250px!important"></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/6.jpeg') }}"
                                                    alt="" style="height: 250px!important"></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html"
                                                            data-tippy="Add to cart" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"> <span
                                                                class="lnr lnr-cart"></span></a></li>
                                                    <li class="quick_button"><a href="#"
                                                            data-tippy="quick view" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box">
                                                            <span class="lnr lnr-magnifier"></span></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"
                                                            data-tippy="Add to Wishlist" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-heart"></span></a></li>
                                                    <li class="compare"><a href="#"
                                                            data-tippy="Add to Compare" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-sync"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Cas Meque
                                                    Metus</a>
                                            </h4>
                                            <p><a href="#">Fruits</a></p>
                                            <div class="price_box">
                                                <span class="current_price">$26.00</span>
                                                <span class="old_price">$362.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/1.jpeg') }}"
                                                    alt="" style="height: 250px!important"></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/6.jpeg') }}"
                                                    alt="" style="height: 250px!important"></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html"
                                                            data-tippy="Add to cart" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"> <span
                                                                class="lnr lnr-cart"></span></a></li>
                                                    <li class="quick_button"><a href="#"
                                                            data-tippy="quick view" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box">
                                                            <span class="lnr lnr-magnifier"></span></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"
                                                            data-tippy="Add to Wishlist" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-heart"></span></a></li>
                                                    <li class="compare"><a href="#"
                                                            data-tippy="Add to Compare" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-sync"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Aliquam
                                                    Consequat</a></h4>
                                            <p><a href="#">Fruits</a></p>
                                            <div class="price_box">
                                                <span class="current_price">$26.00</span>
                                                <span class="old_price">$362.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/1.jpeg') }}"
                                                    alt="" style="height: 250px!important"></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/6.jpeg') }}"
                                                    alt="" style="height: 250px!important"></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                                <span class="label_new">New</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html"
                                                            data-tippy="Add to cart" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"> <span
                                                                class="lnr lnr-cart"></span></a></li>
                                                    <li class="quick_button"><a href="#"
                                                            data-tippy="quick view" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box">
                                                            <span class="lnr lnr-magnifier"></span></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"
                                                            data-tippy="Add to Wishlist" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-heart"></span></a></li>
                                                    <li class="compare"><a href="#"
                                                            data-tippy="Add to Compare" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-sync"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Mauris Vel
                                                    Tellus</a></h4>
                                            <p><a href="#">Fruits</a></p>
                                            <div class="price_box">
                                                <span class="current_price">$48.00</span>
                                                <span class="old_price">$257.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/1.jpeg') }}"
                                                    alt="" style="height: 250px!important"></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/6.jpeg') }}"
                                                    alt="" style="height: 250px!important"></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html"
                                                            data-tippy="Add to cart" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"> <span
                                                                class="lnr lnr-cart"></span></a></li>
                                                    <li class="quick_button"><a href="#"
                                                            data-tippy="quick view" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box">
                                                            <span class="lnr lnr-magnifier"></span></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"
                                                            data-tippy="Add to Wishlist" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-heart"></span></a></li>
                                                    <li class="compare"><a href="#"
                                                            data-tippy="Add to Compare" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-sync"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Nunc Neque
                                                    Eros</a>
                                            </h4>
                                            <p><a href="#">Fruits</a></p>
                                            <div class="price_box">
                                                <span class="current_price">$35.00</span>
                                                <span class="old_price">$245.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/1.jpeg') }}"
                                                    alt="" style="height: 250px!important"></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/6.jpeg') }}"
                                                    alt="" style="height: 250px!important"></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html"
                                                            data-tippy="Add to cart" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"> <span
                                                                class="lnr lnr-cart"></span></a></li>
                                                    <li class="quick_button"><a href="#"
                                                            data-tippy="quick view" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box">
                                                            <span class="lnr lnr-magnifier"></span></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"
                                                            data-tippy="Add to Wishlist" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-heart"></span></a></li>
                                                    <li class="compare"><a href="#"
                                                            data-tippy="Add to Compare" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-sync"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Proin Lectus
                                                    Ipsum</a></h4>
                                            <p><a href="#">Fruits</a></p>
                                            <div class="price_box">
                                                <span class="current_price">$26.00</span>
                                                <span class="old_price">$362.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product area end-->

    <!--blog area start-->
    <section class="blog_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <p>Our recent articles about Organic</p>
                        <h2>Our Blog Posts</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog_carousel blog_column3 owl-carousel">
                    @forelse ($blogs as $blog)
                        <div class="col-lg-3">
                            <article class="single_blog">
                                <figure>
                                    <div class="blog_thumb">
                                        <a href="{{ route('blog.details', $blog->id) }}">
                                            <img src="{{ asset($blog->image) }}" style="height: 250px!important"
                                                alt="">
                                        </a>
                                    </div>
                                    <figcaption class="blog_content">
                                        <div class="articles_date">
                                            <p>{{ $blog->created_at->format('Y m D') }} | <a
                                                    href="{{ route('blog.details', $blog->id) }}">{{ $blog->category }}</a>
                                            </p>
                                        </div>
                                        <h4 class="post_title"><a
                                                href="{{ route('blog.details', $blog->id) }}">{{ substr($blog->short_description, 0, 60) }}</a>
                                        </h4>
                                        {{-- substr($blog->data['details'], 0, 60) --}}
                                        <footer class="blog_footer">
                                            <a href="{{ route('blog.details', $blog->id) }}">Show more</a>
                                        </footer>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                    @empty
                        <div class="col-lg-3">
                            <article class="single_blog">
                                <figure>
                                    <div class="blog_thumb">
                                        <a href="blog-details.html"><img
                                                src="{{ asset('front-asset/assets/img/blog/blog2.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <figcaption class="blog_content">
                                        <div class="articles_date">
                                            <p>23/06/2021 | <a href="#">eCommerce</a> </p>
                                        </div>
                                        <h4 class="post_title"><a href="blog-details.html"> dolor sit amet, elit.
                                                Illo
                                                iste sed animi quaerat nobis odit nulla.</a></h4>
                                        <footer class="blog_footer">
                                            <a href="blog-details.html">Show more</a>
                                        </footer>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3">
                            <article class="single_blog">
                                <figure>
                                    <div class="blog_thumb">
                                        <a href="blog-details.html"><img
                                                src="{{ asset('front-asset/assets/img/blog/blog2.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <figcaption class="blog_content">
                                        <div class="articles_date">
                                            <p>23/06/2021 | <a href="#">eCommerce</a> </p>
                                        </div>
                                        <h4 class="post_title"><a href="blog-details.html"> dolor sit amet, elit.
                                                Illo
                                                iste sed animi quaerat nobis odit nulla.</a></h4>
                                        <footer class="blog_footer">
                                            <a href="blog-details.html">Show more</a>
                                        </footer>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3">
                            <article class="single_blog">
                                <figure>
                                    <div class="blog_thumb">
                                        <a href="blog-details.html"><img
                                                src="{{ asset('front-asset/assets/img/blog/blog3.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <figcaption class="blog_content">
                                        <div class="articles_date">
                                            <p>23/06/2021 | <a href="#">eCommerce</a> </p>
                                        </div>
                                        <h4 class="post_title"><a href="blog-details.html">maxime laborum voluptas
                                                minus, est, unde eaque esse tenetur.</a></h4>
                                        <footer class="blog_footer">
                                            <a href="blog-details.html">Show more</a>
                                        </footer>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3">
                            <article class="single_blog">
                                <figure>
                                    <div class="blog_thumb">
                                        <a href="blog-details.html"><img
                                                src="{{ asset('front-asset/assets/img/blog/blog2.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <figcaption class="blog_content">
                                        <div class="articles_date">
                                            <p>23/06/2021 | <a href="#">eCommerce</a> </p>
                                        </div>
                                        <h4 class="post_title"><a href="blog-details.html">Lorem ipsum dolor sit
                                                amet,
                                                elit. Impedit, aliquam animi, saepe ex.</a></h4>
                                        <footer class="blog_footer">
                                            <a href="blog-details.html">Show more</a>
                                        </footer>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    <!--blog area end-->

    <!--our team area start-->
    <section class="blog_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <p>Our recent team member's information</p>
                        <h2>Our Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog_carousel blog_column3 owl-carousel">
                    @foreach ($teams as $team)
                        <div class="col-lg-3">
                            <article class="single_blog">
                                <figure>
                                    <div class="blog_thumb">
                                        <a href="blog-details.html">
                                            <img src="{{ asset($team->image) }}" style="height: 362px!important"
                                                alt="">
                                        </a>
                                    </div>
                                    <figcaption class="blog_content">
                                        {{-- <div class="articles_date">
                                        <p>{{ $team->created_at->format('Y m D') }} | <a href="#">{{ $team->category }}</a> </p>
                                    </div> --}}
                                        <h4 class="post_title"><a href="blog-details.html">{{ $team->name }}</a>
                                        </h4>
                                        <h5 class="post_title"><a
                                                href="blog-details.html">{{ $team->degnigation }}</a></h5>
                                        <footer class="blog_footer">
                                            {{-- <a href="blog-details.html">Show more</a> --}}
                                        </footer>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--our team area end-->

    <!--custom product area start-->
    <div class="custom_product_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <p>Recently added our store </p>
                        <h2>Featured Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="small_product_area product_carousel product_column3 owl-carousel">

                        @forelse ($products as $product)
                            @if ($product->packaging_type == 2)
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img"
                                                    href="{{ route('product.details', $product->id) }}"><img
                                                        src="{{ asset($product->thumble) }}"
                                                        style="height: 200px!important" alt=""></a>
                                                <a class="secondary_img"
                                                    href="{{ route('product.details', $product->id) }}"><img
                                                        src="{{ asset($product->thumble) }}"
                                                        style="height: 200px!important" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a
                                                                href="{{ route('product.details', $product->id) }}"
                                                                data-tippy="Add to cart" data-tippy-placement="top"
                                                                data-tippy-arrow="true" data-tippy-inertia="true">
                                                                <span class="lnr lnr-cart"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a
                                                        href="{{ route('product.details', $product->id) }}">{{ $product->name }}</a>
                                                </h4>
                                                <p><a
                                                        href="{{ route('product.details', $product->id) }}">{{ $product->category->name }}</a>
                                                </p>
                                                <div class="price_box">
                                                    <span class="current_price">BDT&nbsp;
                                                        {{ $product->purchase_price }}</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img"
                                                    href="{{ route('product.details', $product->id) }}"><img
                                                        src="{{ asset($product->thumble) }}"
                                                        style="height: 200px!important" alt=""></a>
                                                <a class="secondary_img"
                                                    href="{{ route('product.details', $product->id) }}"><img
                                                        src="{{ asset($product->thumble) }}"
                                                        style="height: 200px!important" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a
                                                                href="{{ route('product.details', $product->id) }}"
                                                                data-tippy="Add to cart" data-tippy-placement="top"
                                                                data-tippy-arrow="true" data-tippy-inertia="true">
                                                                <span class="lnr lnr-cart"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a
                                                        href="{{ route('product.details', $product->id) }}">{{ $product->name }}</a>
                                                </h4>
                                                <p><a
                                                        href="{{ route('product.details', $product->id) }}">{{ $product->category->name }}</a>
                                                </p>
                                                <div class="price_box">
                                                    <span class="current_price">BDT&nbsp;
                                                        {{ $product->purchase_price }}</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img"
                                                    href="{{ route('product.details', $product->id) }}"><img
                                                        src="{{ asset($product->thumble) }}"
                                                        style="height: 200px!important" alt=""></a>
                                                <a class="secondary_img"
                                                    href="{{ route('product.details', $product->id) }}"><img
                                                        src="{{ asset($product->thumble) }}"
                                                        style="height: 200px!important" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a
                                                                href="{{ route('product.details', $product->id) }}"
                                                                data-tippy="Add to cart" data-tippy-placement="top"
                                                                data-tippy-arrow="true" data-tippy-inertia="true">
                                                                <span class="lnr lnr-cart"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a
                                                        href="{{ route('product.details', $product->id) }}">{{ $product->name }}</a>
                                                </h4>
                                                <p><a
                                                        href="{{ route('product.details', $product->id) }}">{{ $product->category->name }}</a>
                                                </p>
                                                <div class="price_box">
                                                    <span class="current_price">BDT&nbsp;
                                                        {{ $product->purchase_price }}</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            @endif
                        @empty
                            <div class="product_items">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/1.jpeg') }}"
                                                    alt="" style="height: 250px!important"></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="assets/img/product/6.jpeg" alt=""
                                                    style="height: 250px!important"></a>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Quisque In
                                                    Arcu</a>
                                            </h4>
                                            <p><a href="#">Fruits</a></p>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html"
                                                            data-tippy="Add to cart" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"> <span
                                                                class="lnr lnr-cart"></span></a></li>
                                                    <li class="quick_button"><a href="#"
                                                            data-tippy="quick view" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box">
                                                            <span class="lnr lnr-magnifier"></span></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"
                                                            data-tippy="Add to Wishlist" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-heart"></span></a></li>
                                                    <li class="compare"><a href="#"
                                                            data-tippy="Add to Compare" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-sync"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="current_price">$20.00</span>
                                                <span class="old_price">$352.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/9.jpeg') }}"
                                                    alt="" style="height: 250px!important"></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/8.jpeg') }}"
                                                    alt="" style="height: 250px!important"></a>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Cas Meque
                                                    Metus</a>
                                            </h4>
                                            <p><a href="#">Fruits</a></p>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html"
                                                            data-tippy="Add to cart" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"> <span
                                                                class="lnr lnr-cart"></span></a></li>
                                                    <li class="quick_button"><a href="#"
                                                            data-tippy="quick view" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box">
                                                            <span class="lnr lnr-magnifier"></span></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"
                                                            data-tippy="Add to Wishlist" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-heart"></span></a></li>
                                                    <li class="compare"><a href="#"
                                                            data-tippy="Add to Compare" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-sync"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="current_price">$72.00</span>
                                                <span class="old_price">$352.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/10.jpeg') }}"
                                                    alt="" style="height: 250px!important"></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/11.jpeg') }}"
                                                    alt="" style="height: 250px!important"></a>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Proin Lectus
                                                    Ipsum</a></h4>
                                            <p><a href="#">Fruits</a></p>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html"
                                                            data-tippy="Add to cart" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"> <span
                                                                class="lnr lnr-cart"></span></a></li>
                                                    <li class="quick_button"><a href="#"
                                                            data-tippy="quick view" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box">
                                                            <span class="lnr lnr-magnifier"></span></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"
                                                            data-tippy="Add to Wishlist" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-heart"></span></a></li>
                                                    <li class="compare"><a href="#"
                                                            data-tippy="Add to Compare" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-sync"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="current_price">$36.00</span>
                                                <span class="old_price">$282.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="product_items">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/1.jpeg') }}"
                                                    alt="" style="height: 250px!important"></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/6.jpeg') }}"
                                                    alt="" style="height: 250px!important"></a>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Mauris Vel
                                                    Tellus</a></h4>
                                            <p><a href="#">Fruits</a></p>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html"
                                                            data-tippy="Add to cart" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"> <span
                                                                class="lnr lnr-cart"></span></a></li>
                                                    <li class="quick_button"><a href="#"
                                                            data-tippy="quick view" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box">
                                                            <span class="lnr lnr-magnifier"></span></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"
                                                            data-tippy="Add to Wishlist" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-heart"></span></a></li>
                                                    <li class="compare"><a href="#"
                                                            data-tippy="Add to Compare" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-sync"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="current_price">$45.00</span>
                                                <span class="old_price">$162.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/9.jpeg') }}"
                                                    alt="" style="height: 250px!important"></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="assets/img/product/8.jpeg" alt=""
                                                    style="height: 250px!important"></a>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Donec Non
                                                    Est</a>
                                            </h4>
                                            <p><a href="#">Fruits</a></p>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html"
                                                            data-tippy="Add to cart" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"> <span
                                                                class="lnr lnr-cart"></span></a></li>
                                                    <li class="quick_button"><a href="#"
                                                            data-tippy="quick view" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box">
                                                            <span class="lnr lnr-magnifier"></span></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"
                                                            data-tippy="Add to Wishlist" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-heart"></span></a></li>
                                                    <li class="compare"><a href="#"
                                                            data-tippy="Add to Compare" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-sync"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="current_price">$46.00</span>
                                                <span class="old_price">$382.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/11.jpeg') }}"
                                                    alt="" style="height: 250px!important"></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="assets/img/product/10.jpeg" alt=""
                                                    style="height: 250px!important"></a>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Donec Non
                                                    Est</a>
                                            </h4>
                                            <p><a href="#">Fruits</a></p>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html"
                                                            data-tippy="Add to cart" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"> <span
                                                                class="lnr lnr-cart"></span></a></li>
                                                    <li class="quick_button"><a href="#"
                                                            data-tippy="quick view" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box">
                                                            <span class="lnr lnr-magnifier"></span></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"
                                                            data-tippy="Add to Wishlist" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-heart"></span></a></li>
                                                    <li class="compare"><a href="#"
                                                            data-tippy="Add to Compare" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-sync"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="current_price">$46.00</span>
                                                <span class="old_price">$382.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="product_items">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/1.jpeg') }}"
                                                    alt="" style="height: 250px!important"></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="assets/img/product/1.jpeg" alt=""
                                                    style="height: 250px!important"></a>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Aliquam
                                                    Consequat</a></h4>
                                            <p><a href="#">Fruits</a></p>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html"
                                                            data-tippy="Add to cart" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"> <span
                                                                class="lnr lnr-cart"></span></a></li>
                                                    <li class="quick_button"><a href="#"
                                                            data-tippy="quick view" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box">
                                                            <span class="lnr lnr-magnifier"></span></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"
                                                            data-tippy="Add to Wishlist" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-heart"></span></a></li>
                                                    <li class="compare"><a href="#"
                                                            data-tippy="Add to Compare" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-sync"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="current_price">$26.00</span>
                                                <span class="old_price">$362.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/1.jpeg') }}"
                                                    alt="" style="height: 250px!important"></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="assets/img/product/6.jpeg" alt=""
                                                    style="height: 250px!important"></a>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Donec Non
                                                    Est</a>
                                            </h4>
                                            <p><a href="#">Fruits</a></p>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html"
                                                            data-tippy="Add to cart" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"> <span
                                                                class="lnr lnr-cart"></span></a></li>
                                                    <li class="quick_button"><a href="#"
                                                            data-tippy="quick view" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box">
                                                            <span class="lnr lnr-magnifier"></span></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"
                                                            data-tippy="Add to Wishlist" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-heart"></span></a></li>
                                                    <li class="compare"><a href="#"
                                                            data-tippy="Add to Compare" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-sync"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="current_price">$46.00</span>
                                                <span class="old_price">$382.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('front-asset/assets/img/product/9.jpeg') }}"
                                                    alt="" style="height: 250px!important"></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="assets/img/product/8.jpeg" alt=""
                                                    style="height: 250px!important"></a>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Mauris Vel
                                                    Tellus</a></h4>
                                            <p><a href="#">Fruits</a></p>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html"
                                                            data-tippy="Add to cart" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"> <span
                                                                class="lnr lnr-cart"></span></a></li>
                                                    <li class="quick_button"><a href="#"
                                                            data-tippy="quick view" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box">
                                                            <span class="lnr lnr-magnifier"></span></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"
                                                            data-tippy="Add to Wishlist" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-heart"></span></a></li>
                                                    <li class="compare"><a href="#"
                                                            data-tippy="Add to Compare" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"><span
                                                                class="lnr lnr-sync"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="current_price">$56.00</span>
                                                <span class="old_price">$362.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--custom product area end-->

    <!--brand area start-->
    <!--brand area start-->
    <div class="brand_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <p>Recently added our store </p>
                        <h2>Our Brands</h2>
                    </div>
                    <div class="brand_container owl-carousel ">
                        @forelse ($brands as $brand)
                            <div class="single_brand">
                                <a href="#"><img src="{{ asset($brand->image) }}"
                                        style="height: 50px!important" alt=""></a>
                            </div>
                        @empty
                            <div class="single_brand">
                                <a href="#"><img
                                        src="{{ asset('front-asset/assets/img/brand/brand2.jpg') }}"
                                        alt=""></a>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand area end-->
    <!--brand area end-->

    {{-- @push('styles')
        <style>
            .slider {
                position: relative;
                width: 100%;
                height: 400px;
                overflow: hidden;
            }

            .slides {
                display: flex;
                width: calc(100% * 3);
            }

            .slides img {
                width: calc(100% / 3);
                height: 100%;
            }

            button {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                width: 50px;
                height: 50px;
                font-size: 24px;
                color: white;
                background-color: black;
                border: none;
                cursor: pointer;
                opacity: 0.5;
            }

            .prev {
                left: 0;
            }

            .next {
                right: 0;
            }

            button:hover {
                opacity: 1;
            }
        </style>
    @endpush

    @push('sctipts')
        <script>
            const slider = document.querySelector('.slider');
            const slides = slider.querySelector('.slides');
            const slideCount = slides.children.length;
            let currentPosition = 0;
            let intervalId;

            function startAutoSlide() {
                intervalId = setInterval(() => {
                    currentPosition = (currentPosition + 1) % slideCount;
                    slides.style.transform = `translateX(-${currentPosition * 100}%)`;
                }, 3000);
            }

            function stopAutoSlide() {
                clearInterval(intervalId);
            }

            startAutoSlide();

            slider.addEventListener('mouseenter', stopAutoSlide);
            slider.addEventListener('mouseleave', startAutoSlide);
        </script>
    @endpush --}}
    </x-front-app-layo>
