<x-front-app-layout>
    <!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <h3>Products</h3>
                    <ul>
                        <li><a href="{{ route('home') }}">home</a></li>
                        <li>products</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--shop  area start-->
<div class="shop_area shop_fullwidth mt-70 mb-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!--shop wrapper start-->
                <!--shop toolbar start-->
                <div class="shop_toolbar_wrapper">
                    <div class="shop_toolbar_btn">

                        <button data-role="grid_3" type="button" class=" btn-grid-3" data-toggle="tooltip"
                            title="3"></button>

                        <button data-role="grid_4" type="button" class="active btn-grid-4" data-toggle="tooltip"
                            title="4"></button>

                        <button data-role="grid_list" type="button" class="btn-list" data-toggle="tooltip"
                            title="List"></button>
                    </div>
                    <div class=" niceselect_option">
                        {{-- <form class="select_option" action="#">
                            <select name="orderby" id="short">

                                <option selected value="1">Sort by average rating</option>
                                <option value="2">Sort by popularity</option>
                                <option value="3">Sort by newness</option>
                                <option value="4">Sort by price: low to high</option>
                                <option value="5">Sort by price: high to low</option>
                                <option value="6">Product Name: Z</option>
                            </select>
                        </form> --}}
                    </div>
                    {{-- <div class="page_amount">
                        <p>Showing 1–9 of 21 results</p>
                    </div> --}}
                </div>
                <!--shop toolbar end-->
                <div class="row shop_wrapper">
                    @forelse ($products as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{ route('product.details', $product->id) }}"><img
                                        src="{{ asset($product->thumble) }}" style="height: 250px!important" alt=""></a>
                                <a class="secondary_img" href="{{ route('product.details', $product->id) }}"><img
                                        src="{{ asset($product->thumble) }}" style="height: 250px!important" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                    <span class="label_new">New</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="add_to_cart"><a href="{{ route('product.details', $product->id) }}" data-tippy="Add to cart"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"> <span class="lnr lnr-cart"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content grid_content">
                                <h4 class="product_name"><a href="{{ route('product.details', $product->id) }}">{{ $product->name }}</a></h4>
                                <p><a href="#">{{ $product->category->name }}</a></p>
                                <div class="price_box">
                                    <span class="current_price">BDT&nbsp;{{ $product->purchase_price }}.00</span>
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="{{ route('product.details', $product->id) }}">{{ $product->name }}</a></h4>
                                <p><a href="#">{{ $product->category->name }}</a></p>
                                <div class="price_box">
                                    <span class="current_price">BDT&nbsp;{{ $product->purchase_price }}.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>{{$product->details}}</p>
                                </div>
                                <div class="action_links list_action_right">
                                    <ul>
                                        <li class="add_to_cart"><a href="{{ route('product.details', $product->id) }}" title="Add to cart">Add to
                                                Cart</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="{{ asset('front-asset/assets/img/product/2.jpeg') }}" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="{{ asset('front-asset/assets/img/product/2.jpeg') }}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                    <span class="label_new">New</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="add_to_cart"><a href="cart.html" data-tippy="Add to cart"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"> <span class="lnr lnr-cart"></span></a></li>
                                        <li class="quick_button"><a href="#" data-tippy="quick view"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box"> <span class="lnr lnr-magnifier"></span></a>
                                        </li>
                                        <li class="wishlist"><a href="wishlist.html" data-tippy="Add to Wishlist"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="#" data-tippy="Add to Compare"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content grid_content">
                                <h4 class="product_name"><a href="product-details.html">Aliquam Consequat</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$26.00</span>
                                    <span class="old_price">$362.00</span>
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="product-details.html">Aliquam Consequat</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$26.00</span>
                                    <span class="old_price">$362.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis
                                        vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis
                                        in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend
                                        laoreet congue. Viva..</p>
                                </div>
                                <div class="action_links list_action_right">
                                    <ul>
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to
                                                Cart</a></li>
                                        <li class="quick_button"><a href="#" data-tippy="quick view"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box"> <span
                                                    class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" data-tippy="Add to Wishlist"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="#" data-tippy="Add to Compare"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="assets/img/product/productbig3.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="assets/img/product/productbig4.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="add_to_cart"><a href="cart.html" data-tippy="Add to cart"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"> <span class="lnr lnr-cart"></span></a></li>
                                        <li class="quick_button"><a href="#" data-tippy="quick view"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box"> <span
                                                    class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" data-tippy="Add to Wishlist"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="#" data-tippy="Add to Compare"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content grid_content">
                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$32.00</span>
                                    <span class="old_price">$342.00</span>
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$32.00</span>
                                    <span class="old_price">$342.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis
                                        vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis
                                        in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend
                                        laoreet congue. Viva..</p>
                                </div>
                                <div class="action_links list_action_right">
                                    <ul>
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to
                                                Cart</a></li>
                                        <li class="quick_button"><a href="#" data-tippy="quick view"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box"> <span
                                                    class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" data-tippy="Add to Wishlist"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="#" data-tippy="Add to Compare"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="assets/img/product/productbig5.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="assets/img/product/productbig6.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="add_to_cart"><a href="cart.html" data-tippy="Add to cart"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"> <span class="lnr lnr-cart"></span></a></li>
                                        <li class="quick_button"><a href="#" data-tippy="quick view"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box"> <span
                                                    class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" data-tippy="Add to Wishlist"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="#" data-tippy="Add to Compare"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content grid_content">
                                <h4 class="product_name"><a href="product-details.html">Donec Ac Tempus</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$46.00</span>
                                    <span class="old_price">$322.00</span>
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="product-details.html">Donec Ac Tempus</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$26.00</span>
                                    <span class="old_price">$362.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis
                                        vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis
                                        in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend
                                        laoreet congue. Viva..</p>
                                </div>
                                <div class="action_links list_action_right">
                                    <ul>
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to
                                                Cart</a></li>
                                        <li class="quick_button"><a href="#" data-tippy="quick view"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box"> <span
                                                    class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" data-tippy="Add to Wishlist"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="#" data-tippy="Add to Compare"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="assets/img/product/productbig7.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="assets/img/product/productbig8.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="add_to_cart"><a href="cart.html" data-tippy="Add to cart"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"> <span class="lnr lnr-cart"></span></a></li>
                                        <li class="quick_button"><a href="#" data-tippy="quick view"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box"> <span
                                                    class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" data-tippy="Add to Wishlist"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="#" data-tippy="Add to Compare"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content grid_content">
                                <h4 class="product_name"><a href="product-details.html">Donec Non Est</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$28.00</span>
                                    <span class="old_price">$382.00</span>
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="product-details.html">Donec Non Est</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$26.00</span>
                                    <span class="old_price">$362.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis
                                        vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis
                                        in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend
                                        laoreet congue. Viva..</p>
                                </div>
                                <div class="action_links list_action_right">
                                    <ul>
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to
                                                Cart</a></li>
                                        <li class="quick_button"><a href="#" data-tippy="quick view"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box"> <span
                                                    class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" data-tippy="Add to Wishlist"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="#" data-tippy="Add to Compare"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="assets/img/product/productbig9.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="assets/img/product/productbig10.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                    <span class="label_new">New</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="add_to_cart"><a href="cart.html" data-tippy="Add to cart"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"> <span class="lnr lnr-cart"></span></a></li>
                                        <li class="quick_button"><a href="#" data-tippy="quick view"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box"> <span
                                                    class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" data-tippy="Add to Wishlist"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="#" data-tippy="Add to Compare"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content grid_content">
                                <h4 class="product_name"><a href="product-details.html">Etiam Gravida</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$26.00</span>
                                    <span class="old_price">$362.00</span>
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="product-details.html">Etiam Gravida</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$26.00</span>
                                    <span class="old_price">$362.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis
                                        vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis
                                        in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend
                                        laoreet congue. Viva..</p>
                                </div>
                                <div class="action_links list_action_right">
                                    <ul>
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to
                                                Cart</a></li>
                                        <li class="quick_button"><a href="#" data-tippy="quick view"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box"> <span
                                                    class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" data-tippy="Add to Wishlist"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="#" data-tippy="Add to Compare"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="assets/img/product/productbig11.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="assets/img/product/productbig12.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                    <span class="label_new">New</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="add_to_cart"><a href="cart.html" data-tippy="Add to cart"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"> <span class="lnr lnr-cart"></span></a></li>
                                        <li class="quick_button"><a href="#" data-tippy="quick view"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box"> <span
                                                    class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" data-tippy="Add to Wishlist"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="#" data-tippy="Add to Compare"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content grid_content">
                                <h4 class="product_name"><a href="product-details.html">Fusce Aliquam</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$36.00</span>
                                    <span class="old_price">$332.00</span>
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="product-details.html">Fusce Aliquam</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$26.00</span>
                                    <span class="old_price">$362.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis
                                        vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis
                                        in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend
                                        laoreet congue. Viva..</p>
                                </div>
                                <div class="action_links list_action_right">
                                    <ul>
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to
                                                Cart</a></li>
                                        <li class="quick_button"><a href="#" data-tippy="quick view"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box"> <span
                                                    class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" data-tippy="Add to Wishlist"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="#" data-tippy="Add to Compare"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="assets/img/product/productbig13.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="assets/img/product/productbig14.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="add_to_cart"><a href="cart.html" data-tippy="Add to cart"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"> <span class="lnr lnr-cart"></span></a></li>
                                        <li class="quick_button"><a href="#" data-tippy="quick view"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box"> <span
                                                    class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" data-tippy="Add to Wishlist"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="#" data-tippy="Add to Compare"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content grid_content">
                                <h4 class="product_name"><a href="product-details.html">Letraset Sheets</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$56.00</span>
                                    <span class="old_price">$286.00</span>
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="product-details.html">Letraset Sheets</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$56.00</span>
                                    <span class="old_price">$286.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis
                                        vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis
                                        in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend
                                        laoreet congue. Viva..</p>
                                </div>
                                <div class="action_links list_action_right">
                                    <ul>
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to
                                                Cart</a></li>
                                        <li class="quick_button"><a href="#" data-tippy="quick view"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box"> <span
                                                    class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" data-tippy="Add to Wishlist"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="#" data-tippy="Add to Compare"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="assets/img/product/productbig2.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="{{ asset('front-asset/assets/img/product/2.jpeg') }}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                    <span class="label_new">New</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="add_to_cart"><a href="cart.html" data-tippy="Add to cart"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"> <span class="lnr lnr-cart"></span></a></li>
                                        <li class="quick_button"><a href="#" data-tippy="quick view"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box"> <span
                                                    class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" data-tippy="Add to Wishlist"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="#" data-tippy="Add to Compare"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content grid_content">
                                <h4 class="product_name"><a href="product-details.html">Lorem Ipsum Lec</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$26.00</span>
                                    <span class="old_price">$362.00</span>
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="product-details.html">Lorem Ipsum Lec</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$26.00</span>
                                    <span class="old_price">$362.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis
                                        vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis
                                        in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend
                                        laoreet congue. Viva..</p>
                                </div>
                                <div class="action_links list_action_right">
                                    <ul>
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to
                                                Cart</a></li>
                                        <li class="quick_button"><a href="#" data-tippy="quick view"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box"> <span
                                                    class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" data-tippy="Add to Wishlist"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="#" data-tippy="Add to Compare"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="assets/img/product/productbig4.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="assets/img/product/productbig3.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="add_to_cart"><a href="cart.html" data-tippy="Add to cart"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"> <span class="lnr lnr-cart"></span></a></li>
                                        <li class="quick_button"><a href="#" data-tippy="quick view"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box"> <span
                                                    class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" data-tippy="Add to Wishlist"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="#" data-tippy="Add to Compare"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content grid_content">
                                <h4 class="product_name"><a href="product-details.html">Mauris Vel Tellus</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$65.00</span>
                                    <span class="old_price">$292.00</span>
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="product-details.html">Mauris Vel Tellus</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$65.00</span>
                                    <span class="old_price">$292.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis
                                        vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis
                                        in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend
                                        laoreet congue. Viva..</p>
                                </div>
                                <div class="action_links list_action_right">
                                    <ul>
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to
                                                Cart</a></li>
                                        <li class="quick_button"><a href="#" data-tippy="quick view"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box"> <span
                                                    class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" data-tippy="Add to Wishlist"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="#" data-tippy="Add to Compare"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="assets/img/product/productbig6.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="assets/img/product/productbig5.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                    <span class="label_new">New</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="add_to_cart"><a href="cart.html" data-tippy="Add to cart"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"> <span class="lnr lnr-cart"></span></a></li>
                                        <li class="quick_button"><a href="#" data-tippy="quick view"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box"> <span
                                                    class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" data-tippy="Add to Wishlist"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="#" data-tippy="Add to Compare"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content grid_content">
                                <h4 class="product_name"><a href="product-details.html">Nunc Neque Eros</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$26.00</span>
                                    <span class="old_price">$362.00</span>
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="product-details.html">Nunc Neque Eros</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$26.00</span>
                                    <span class="old_price">$362.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis
                                        vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis
                                        in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend
                                        laoreet congue. Viva..</p>
                                </div>
                                <div class="action_links list_action_right">
                                    <ul>
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to
                                                Cart</a></li>
                                        <li class="quick_button"><a href="#" data-tippy="quick view"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box"> <span
                                                    class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" data-tippy="Add to Wishlist"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="#" data-tippy="Add to Compare"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="assets/img/product/productbig8.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="assets/img/product/productbig7.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="add_to_cart"><a href="cart.html" data-tippy="Add to cart"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"> <span class="lnr lnr-cart"></span></a></li>
                                        <li class="quick_button"><a href="#" data-tippy="quick view"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box"> <span
                                                    class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" data-tippy="Add to Wishlist"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="#" data-tippy="Add to Compare"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content grid_content">
                                <h4 class="product_name"><a href="product-details.html">Proin Lectus Ipsum</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$44.00</span>
                                    <span class="old_price">$332.00</span>
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="product-details.html">Proin Lectus Ipsum</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$44.00</span>
                                    <span class="old_price">$332.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis
                                        vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis
                                        in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend
                                        laoreet congue. Viva..</p>
                                </div>
                                <div class="action_links list_action_right">
                                    <ul>
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to
                                                Cart</a></li>
                                        <li class="quick_button"><a href="#" data-tippy="quick view"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box"> <span
                                                    class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" data-tippy="Add to Wishlist"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="#" data-tippy="Add to Compare"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img
                                        src="assets/img/product/productbig10.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img
                                        src="assets/img/product/productbig9.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                    <span class="label_new">New</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="add_to_cart"><a href="cart.html" data-tippy="Add to cart"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"> <span class="lnr lnr-cart"></span></a>
                                        </li>
                                        <li class="quick_button"><a href="#" data-tippy="quick view"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box"> <span
                                                    class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" data-tippy="Add to Wishlist"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-heart"></span></a>
                                        </li>
                                        <li class="compare"><a href="#" data-tippy="Add to Compare"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-sync"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content grid_content">
                                <h4 class="product_name"><a href="product-details.html">Quisque In Arcu</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$26.00</span>
                                    <span class="old_price">$362.00</span>
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="product-details.html">Quisque In Arcu</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$26.00</span>
                                    <span class="old_price">$362.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis
                                        vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis
                                        in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend
                                        laoreet congue. Viva..</p>
                                </div>
                                <div class="action_links list_action_right">
                                    <ul>
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to
                                                Cart</a></li>
                                        <li class="quick_button"><a href="#" data-tippy="quick view"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true" data-bs-toggle="modal"
                                                data-bs-target="#modal_box"> <span
                                                    class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" data-tippy="Add to Wishlist"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-heart"></span></a>
                                        </li>
                                        <li class="compare"><a href="#" data-tippy="Add to Compare"
                                                data-tippy-placement="top" data-tippy-arrow="true"
                                                data-tippy-inertia="true"><span class="lnr lnr-sync"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
<!--shop  area end-->


</x-front-app-layout>
