<x-front-app-layout>
    <!-- customer login start -->
    <div class="customer_login">
        <div class="container">
            <div class="row">
                <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2>login</h2>
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <p>
                                <label>Email <span>*</span></label>
                                <input type="email" name="email" disabled>
                            </p>
                            <p>
                                <label>Passwords <span>*</span></label>
                                <input type="password" name="password" disabled>
                            </p>
                            <div class="login_submit">
                                <a href="{{ route('password.request') }}">Lost your password?</a>
                                <label for="remember">
                                    <input id="remember" type="checkbox" disabled>
                                    Remember me
                                </label>
                                <button type="submit">login</button>

                            </div>

                        </form>
                    </div>
                </div>
                <!--login area start-->

                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form register">
                        <h2>Register</h2>
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <p>
                                <label>Full Name <span>*</span></label>
                                <input type="text" name="name" id="name" required autofocus>
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </p>
                            <p>
                                <label>Email address <span>*</span></label>
                                <input type="email" name="email" id="email" required autofocus>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </p>
                            <p>
                                <label>Passwords <span>*</span></label>
                                <input type="password" name="password" required autocomplete="new-password">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </p>
                            <p>
                                <label>Confirm Password <span>*</span></label>
                                <input id="password_confirmation" type="password" name="password_confirmation">
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </p>
                            <p>
                                <label>Phone Number <span>*</span></label>
                                <input type="text" name="phone">
                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />

                            </p>
                            <p>
                                <label>What's App Number <span>*</span></label>
                                <input type="text" name="whatsapp_number">
                                <x-input-error :messages="$errors->get('whatsapp_number')" class="mt-2" />
                            </p>
                            <div class="login_submit">
                                <button type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--register area end-->
            </div>
        </div>
    </div>
    <!-- customer login end -->
</x-front-app-layout>
