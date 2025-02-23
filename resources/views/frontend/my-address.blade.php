<x-front-app-layout>
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>My Address</h3>
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>My Address</li>
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
                                <li><a href="#dashboard" data-toggle="tab" class="nav-link active">My Address</a></li>
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
                                <div class="account_login_form">
                                    <h3>Change Address </h3>
                                    <form method="post" action="{{ route('address.update', $address->id)}}">
                                        @csrf
                                        @method('PUT')
                                        <label>Address</label>
                                        <input type="text" name="address" value="{{ $address->address }}">
                                        <p class="text-danger mt-2">{{ $errors->first('address') }}</p>
                                        <label>City</label>
                                        <input type="text" name="city" value="{{ $address->city }}">
                                        <p class="text-danger mt-2">{{ $errors->first('city') }}</p>
                                        <label>Country</label>
                                        <input type="text" name="country" value="{{ $address->country }}">
                                        <p class="text-danger mt-2">{{ $errors->first('country') }}</p>
                                        <label>Post Code</label>
                                        <input type="text" name="postal_code" value="{{ $address->postal_code }}">
                                        <p class="text-danger mt-2">{{ $errors->first('postal_code') }}</p>
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
    </section>
    <!-- my account end   -->
</x-front-app-layout>
