<x-front-app-layout>
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>My Account</h3>
                        <ul>
                            <li><a href="{{ route('home') }}">home</a></li>
                            <li>My account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->
    <!-- my account start  -->
    <section class="main_content_area">
        <div class="container">
            <div class="account_dashboard">
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <!-- Nav tabs -->
                        <div class="dashboard_tab_button">
                            <ul role="tablist" class="nav flex-column dashboard-list" id="nav-tab">
                                <li><a href="#dashboard" data-toggle="tab" class="nav-link active">Dashboard</a></li>
                                <li> <a href="#orders" data-toggle="tab" class="nav-link">Orders</a></li>
                                <li><a href="#downloads" data-toggle="tab" class="nav-link">Social Links</a></li>
                                <li><a href="#address" data-toggle="tab" class="nav-link">Addresses</a></li>
                                <li><a href="#account-details" data-toggle="tab" class="nav-link">Account details</a>
                                </li>
                                <li>
                                    <form method="POST" id="logout" action="{{ route('logout') }}">
                                        @csrf
                                    </form>
                                    <a href="#" onclick="$('#logout').submit()" class="nav-link">logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <!-- Tab panes -->
                        <div class="tab-content dashboard_content">
                            <div class="tab-pane fade show active" id="dashboard">
                                <h3>Dashboard </h3>
                                <div>
                                    <h3>Welcome, {{ auth()->user()->first_name }} &nbsp;{{ auth()->user()->last_name }}
                                    </h3>
                                    @if (auth()->user()->image)
                                        <a href="#">
                                            <img src="{{ asset(auth()->user()->image) }}" class="rounded" alt=""
                                                style="height: 50px!important">
                                        </a>
                                    @else
                                        <a href="#">
                                            <img src="{{ asset('front-asset/assets/img/about/testimonial1.png') }}"
                                                alt="" style="height: 50px!important">
                                        </a>
                                    @endif
                                </div>
                                <p>From your account dashboard. you can easily check &amp; view your <a
                                        href="#">recent orders</a>, manage your <a href="#">shipping and
                                        billing addresses</a> and <a href="#">Edit your password and account
                                        details.</a></p>
                            </div>
                            <div class="tab-pane fade" id="orders">
                                <h3>Orders</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Order Number</th>
                                                <th>Product Name</th>
                                                <th>Product Qty</th>
                                                <th>Order Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                {{-- <th>Actions</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($orders as $order )
                                            <tr>
                                                <td>{{ $order->order_number }}</td>
                                                <td>{{ $order->product->name }}</td>
                                                <td>{{ $order->product_qty }}</td>
                                                <td>{{ $order->created_at->format('d m Y') }}</td>
                                                <td><span class="success">{{ $order->status }}</span></td>
                                                <td>{{ $order->total_price }}</td>
                                                {{-- <td><a href="cart.html" class="view">view</a></td> --}}
                                            </tr>
                                            @empty

                                            <tr>
                                                <h2>No order found</h2>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="downloads">
                                <h3>Social links</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Social Type</th>
                                                <th>Social Link</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($socialLinks as $socialLink)
                                            <tr>
                                                <td>{{ $socialLink->type }}</td>
                                                <td><a href="{{ $socialLink->link }}">{{ $socialLink->link }}</a></td>
                                                <td>
                                                    <a class="menu-icon text-success" href="{{ route('sociallinks.edit', $socialLink->id) }}">
                                                        Edit
                                                    </a>
                                                    |
                                                    <a class="menu-icon delete-row text-danger" href="{{ route('sociallinks.destroy', $socialLink->id) }}" data-confirm="Are you sure to delete this?">
                                                        Delete
                                                    </a>

                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td>Shopnovilla - Free Real Estate PSD Template</td>
                                                <td>May 10, 2018</td>
                                                <td><span class="danger">Expired</span></td>
                                                <td><a href="#" class="view">Click Here To Download Your
                                                        File</a></td>
                                            </tr>
                                            <tr>
                                                <td>Organic - ecommerce html template</td>
                                                <td>Sep 11, 2018</td>
                                                <td>Never</td>
                                                <td><a href="#" class="view">Click Here To Download Your
                                                        File</a></td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <div class="mt-4">
                                    <div class="account_login_form">
                                        <h3>Create or Update Social Link</h3>
                                        <form action="{{ route('sociallinks.store') }}" method="post">
                                            @csrf
                                            <label>Social Type</label>
                                            <select class="form-control" id="type" name="type">
                                                <option value="">Select a social type</option>
                                                <option value="facebook">
                                                    Facebook
                                                </option>
                                                <option value="instagram">
                                                    Instagram
                                                </option>
                                                <option value="twitter">
                                                    Twitter
                                                </option>
                                                <option value="linkedin">
                                                    Linkedin
                                                </option>
                                            </select>
                                            <label class="mt-4">Social Link</label>
                                            <input type="text" name="link" id="link">
                                            <div class="save_button primary_btn default_button">
                                                <button type="submit">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="address">
                                <h3>Account details </h3>
                                <div class="login">
                                    <div class="login_form_container">
                                        <div class="account_login_form">
                                            <p>The following addresses will be used on the checkout page by default.</p>
                                            <h4 class="billing-address">Billing address</h4>
                                            <p><strong>{{ auth()->user()->first_name }}
                                                    {{ auth()->user()->last_name }}</strong></p>
                                            @foreach ($addresses as $address)
                                                <address>
                                                    {{ $address->address }}<br>
                                                    {{ $address->city }}<br>
                                                    {{ $address->country }} <br>
                                                    {{ $address->postal_code }}<br>
                                                    <a class="text-success"
                                                        href="{{ route('address.edit', $address->id) }}"
                                                        class="view">Edit</a> |
                                                    <a class="menu-icon delete-row text-danger"
                                                        href="{{ route('address.destroy', $address->id) }}"
                                                        data-confirm="Are you sure to delete this?">
                                                        Delete
                                                    </a>
                                                </address>
                                            @endforeach
                                            <br />
                                            <h4 class="billing-address">Create a new address</h4>
                                            <form method="post" action="{{ route('address.store') }}">
                                                @csrf
                                                <label>Address</label>
                                                <input type="text" name="address">
                                                <label>City</label>
                                                <input type="text" name="city">
                                                <label>Country</label>
                                                <input type="text" name="country">
                                                <label>Post Code</label>
                                                <input type="text" name="postal_code">
                                                <div class="save_button primary_btn default_button">
                                                    <button type="submit">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-details">
                                <h3>Account details </h3>
                                <div class="login">
                                    <div class="login_form_container">
                                        <div class="account_login_form">
                                            <form method="post" action="{{ route('profile.update', auth()->id()) }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('patch')
                                                <label>First Name</label>
                                                <input type="text" name="first_name"
                                                    value="{{ auth()->user()->first_name }}">
                                                <label>Last Name</label>
                                                <input type="text" name="last_name"
                                                    value="{{ auth()->user()->last_name }}">
                                                <label>Phone Number</label>
                                                <input type="text" name="phone"
                                                    value="{{ auth()->user()->phone }}">
                                                <label>Email</label>
                                                <input type="email" name="email"
                                                    value="{{ auth()->user()->email }}" readonly>
                                                <label>Image</label>
                                                <input type="file" name="image">
                                                <img src="{{ asset(auth()->user()->image) }}" class="rounded"
                                                    alt="" style="height: 50px!important">
                                                <div class="save_button primary_btn default_button">
                                                    <button type="submit">Save</button>
                                                </div>
                                            </form>
                                            <br />
                                            <h3>Change Password </h3>
                                            <form action="{{ route('password.update') }}" method="post">
                                                @csrf
                                                @method('put')
                                                <label>Current Password</label>
                                                <input type="password" name="current_password" id="current_password"
                                                    autocomplete="current-password">
                                                <label>Password</label>
                                                <input type="password" name="password" id="password"
                                                    autocomplete="new-password">
                                                <label>Confirm Password</label>
                                                <input type="password" name="password_confirmation"
                                                    autocomplete="new-password">
                                                <div class="save_button primary_btn default_button">
                                                    <button type="submit">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- my account end   -->
</x-front-app-layout>
