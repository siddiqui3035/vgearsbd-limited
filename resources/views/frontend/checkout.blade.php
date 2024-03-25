<x-front-app-layout>
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>Checkout</h3>
                        <ul>
                            <li><a href="{{ route('home') }}">home</a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--Checkout page section-->
    <div class="Checkout_section mt-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {{-- <div class="user-actions">
                        <h3>
                            <i class="fa fa-file-o" aria-hidden="true"></i>
                            Returning customer?
                            <a class="Returning" href="#checkout_login" data-bs-toggle="collapse"
                                aria-expanded="true">Click here to login</a>

                        </h3>
                        <div id="checkout_login" class="collapse" data-parent="#accordion">
                            <div class="checkout_info">
                                <p>If you have shopped with us before, please enter your details in the boxes below. If
                                    you are a new customer please proceed to the Billing & Shipping section.</p>
                                <form action="#">
                                    <div class="form_group">
                                        <label>Username or email <span>*</span></label>
                                        <input type="text">
                                    </div>
                                    <div class="form_group">
                                        <label>Password <span>*</span></label>
                                        <input type="text">
                                    </div>
                                    <div class="form_group group_3 ">
                                        <button type="submit">Login</button>
                                        <label for="remember_box">
                                            <input id="remember_box" type="checkbox">
                                            <span> Remember me </span>
                                        </label>
                                    </div>
                                    <a href="#">Lost your password?</a>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="user-actions">
                        <h3>
                            <i class="fa fa-file-o" aria-hidden="true"></i>
                            Returning customer?
                            <a class="Returning" href="#checkout_coupon" data-bs-toggle="collapse"
                                aria-expanded="true">Click here to enter your code</a>

                        </h3>
                        <div id="checkout_coupon" class="collapse" data-parent="#accordion">
                            <div class="checkout_info coupon_info">
                                <form action="#">
                                    <input placeholder="Coupon code" type="text">
                                    <button type="submit">Apply coupon</button>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="checkout_form">
                <p class="text-danger">* N:B: If you have shopped with us before, please review your details in the
                    boxes below. If
                    you want to change your shipping information please go to your <a href="{{ route('my.account') }}"
                        class="text-success">profile page</a> and update your shipping information for proceed to the
                    Billing & Shipping section.</p>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <form action="{{ route('orders.store') }}" method="post">
                            @csrf
                            <h3>Billing Details</h3>
                            <div class="row">
                                <div class="col-lg-6 mb-20">
                                    <label>First Name <span>*</span></label>
                                    <input type="text" value="{{ auth()->user()->first_name }}" readonly>
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <label>Last Name <span>*</span></label>
                                    <input type="text" value="{{ auth()->user()->last_name }}" readonly>
                                </div>
                                {{-- <div class="col-12 mb-20">
                                    <label>Country</label>
                                    <input type="text" >
                                </div> --}}
                                <div class="col-12 mb-20">
                                    <label for="country">country <span>*</span></label>
                                    <select class="select_option" name="country" id="country">
                                        <option value="{{ isset($addresses->country) ? $addresses->country : 'bangladesh' }}">Bangladesh</option
                                            {{ isset($addresses->country) ? 'readonly' : '' }}>
                                            <p class="text-danger">{{ $errors->first('country') }}</p>
                                    </select>
                                </div>
                                <div class="col-12 mb-20">
                                    <label>Street address <span>*</span></label>
                                    <input placeholder="House number and street name" type="text" name="address"
                                        value="{{ isset($addresses->address) ? $addresses->address : '' }}"
                                        {{ isset($addresses->address) ? 'readonly' : '' }}>
                                        <p class="text-danger">{{ $errors->first('address') }}</p>
                                </div>
                                <div class="col-6 mb-20">
                                    <label>Town / City <span>*</span></label>
                                    <input type="text" name="city"
                                        value="{{ isset($addresses->city) ? $addresses->city : '' }}"
                                        {{ isset($addresses->city) ? 'readonly' : '' }}>
                                        <p class="text-danger">{{ $errors->first('city') }}</p>
                                </div>
                                <div class="col-6 mb-20">
                                    <label>Postal Code<span>*</span></label>
                                    <input type="text" name="postal_code"
                                        value="{{ isset($addresses->postal_code) ? $addresses->postal_code : '' }}"
                                        {{ isset($addresses->postal_code) ? 'readonly' : '' }}>
                                        <p class="text-danger">{{ $errors->first('postal_code') }}</p>
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <label>Phone<span>*</span></label>
                                    <input type="text" name="phone"
                                        value="{{ isset(auth()->user()->phone) ? auth()->user()->phone : '' }}"
                                        readonly>
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <label> Email Address <span>*</span></label>
                                    <input type="email" value="{{ auth()->user()->email }}" readonly>
                                </div>
                                {{-- <div class="col-12 mb-20">
                                    <label for="payment_method">Payment method <span>*</span></label>
                                    <select class="select_option" name="payment_method" id="payment_method">
                                        <option value="cod">Cash on delivery</option>
                                    </select>
                                </div> --}}
                                {{-- <div class="col-12 mb-20">
                                    <input id="account" type="checkbox" data-target="createp_account" />
                                    <a data-bs-toggle="collapse" href="#collapseOne" aria-controls="collapseOne">Create
                                        an account?</a>
                                    <div id="collapseOne" class="collapse one" data-parent="#accordion">
                                        <div class="card-body1">
                                            <label> Account password <span>*</span></label>
                                            <input placeholder="password" type="password">
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="col-12 mb-20">
                                    <input id="address" type="checkbox" data-target="createp_account" />
                                    <a class="righ_0" href="#collapsetwo" data-bs-toggle="collapse"
                                        aria-controls="collapsetwo">Ship to a different address?</a>
                                    <div id="collapsetwo" class="collapse one" data-parent="#accordion">
                                        <div class="row">
                                            <div class="col-lg-6 mb-20">
                                                <label>First Name <span>*</span></label>
                                                <input type="text">
                                            </div>
                                            <div class="col-lg-6 mb-20">
                                                <label>Last Name <span>*</span></label>
                                                <input type="text">
                                            </div>
                                            <div class="col-12 mb-20">
                                                <label>Company Name</label>
                                                <input type="text">
                                            </div>
                                            <div class="col-12 mb-20">
                                                <div class="select_form_select">
                                                    <label for="countru_name">country <span>*</span></label>
                                                    <select class="select_option" name="cuntry" id="countru_name">
                                                        <option value="2">bangladesh</option>
                                                        <option value="3">Algeria</option>
                                                        <option value="4">Afghanistan</option>
                                                        <option value="5">Ghana</option>
                                                        <option value="6">Albania</option>
                                                        <option value="7">Bahrain</option>
                                                        <option value="8">Colombia</option>
                                                        <option value="9">Dominican Republic</option>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-12 mb-20">
                                                <label>Street address <span>*</span></label>
                                                <input placeholder="House number and street name" type="text">
                                            </div>
                                            <div class="col-12 mb-20">
                                                <input placeholder="Apartment, suite, unit etc. (optional)"
                                                    type="text">
                                            </div>
                                            <div class="col-12 mb-20">
                                                <label>Town / City <span>*</span></label>
                                                <input type="text">
                                            </div>
                                            <div class="col-12 mb-20">
                                                <label>State / County <span>*</span></label>
                                                <input type="text">
                                            </div>
                                            <div class="col-lg-6 mb-20">
                                                <label>Phone<span>*</span></label>
                                                <input type="text">

                                            </div>
                                            <div class="col-lg-6">
                                                <label> Email Address <span>*</span></label>
                                                <input type="text">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="order-notes">
                                        <label for="order_note">Order Notes</label>
                                        <textarea id="order_note" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                </div> --}}
                            </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                            <h3>Your order</h3>
                            <div class="order_table table-responsive">
                                <table>
                                    <div class="d-none">
                                        {{ $price = 0 }}
                                    </div>
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($carts as $cartItem)
                                            {{-- @dump($cartItem->product_qty) --}}
                                            <tr>
                                                <td> {{ $cartItem->product->name }} <strong> × {{ $cartItem->product_qty }}</strong></td>
                                                <td>
                                                    BDT&nbsp;<span
                                                    class="total_price">{{ $cartItem->product->sale_price * $cartItem->product_qty }}</span>.00
                                                    <div class="d-none">
                                                        {{ $price += $cartItem->product->sale_price * $cartItem->product_qty }}
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td> Handbag elit <strong> × 2</strong></td>
                                                <td> $50.00</td>
                                            </tr>
                                        @endforelse
                                        {{-- <tr>
                                            <td> Handbag justo <strong> × 2</strong></td>
                                            <td> $50.00</td>
                                        </tr>
                                        <tr>
                                            <td> Handbag elit <strong> × 2</strong></td>
                                            <td> $50.00</td>
                                        </tr>
                                        <tr>
                                            <td> Handbag Rutrum <strong> × 1</strong></td>
                                            <td> $50.00</td>
                                        </tr> --}}
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Cart Subtotal</th>
                                            <td>
                                                BDT&nbsp;<span class="gross_price">{{ $price }}</span>.00
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Shipping</th>
                                            <td>
                                                <strong> BDT&nbsp;<span class="shipping_cost">120</span>.00</strong>
                                            </td>
                                        </tr>
                                        <tr class="order_total">
                                            <th>Order Total</th>
                                            <td><strong>BDT&nbsp;<span class="net_price">{{ $price + 120 }}</span>.00</strong></td>
                                        </tr>
                                    </tfoot>

                                </table>
                                <div class="col-12 mb-20">
                                    <label for="payment_method" class="mt-2">Payment method <span>*</span></label>
                                    <select class="select_option" name="payment_method" id="payment_method">
                                        <option value="cod">Cash on delivery</option>
                                    </select>
                                </div>
                            </div>
                            <div class="payment_method">
                                {{-- <div class="panel-default">
                                    <input id="payment" name="check_method" type="radio"
                                        data-target="createp_account" />
                                    <a href="#method" data-bs-toggle="collapse" aria-controls="method">Create an
                                        account?</a>
                                    <div id="method" class="collapse one" data-parent="#accordion">
                                        <div class="card-body1">
                                            <p>Please send a check to Store Name, Store Street, Store Town, Store State
                                                / County, Store Postcode.</p>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="panel-default">
                                    <input id="payment_defult" name="check_method" type="radio"
                                        data-target="createp_account" />
                                    <a href="#collapsedefult" data-bs-toggle="collapse"
                                        aria-controls="collapsedefult">PayPal <img src="assets/img/icon/papyel.png"
                                            alt=""></a>
                                    <div id="collapsedefult" class="collapse one" data-parent="#accordion">
                                        <div class="card-body1">
                                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a
                                                PayPal account.</p>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="order_button">
                                    <button type="submit">Proceed to Order</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Checkout page section end-->
</x-front-app-layout>
