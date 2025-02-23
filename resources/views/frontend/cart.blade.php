<x-front-app-layout>
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>Cart</h3>
                        <ul>
                            <li><a href="{{ route('home') }}">home</a></li>
                            <li>Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shopping cart area start -->
    <div class="shopping_cart_area mt-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="table_desc">
                        <div class="cart_page">
                            <div class="d-none">
                                {{ $price = 0 }}
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product_remove">Delete</th>
                                        <th class="product_thumb">Image</th>
                                        <th class="product_name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product_quantity">Quantity</th>
                                        <th class="product_total">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($carts as $cart)
                                        <tr>
                                            <td class="product_remove ">
                                                <a class="delete-row" href="{{ route('cart.destroy', $cart->id) }}"
                                                    data-confirm="Are you sure to delete this?">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </td>
                                            <td class="product_thumb"><a href="{{ route('products') }}"><img
                                                        src="{{ asset($cart->product->thumble) }}" alt=""></a>
                                            </td>
                                            <td class="product_name"><a href="#">{{ $cart->product->name }}</a>
                                            </td>
                                            <td class="product-price">
                                                BDT&nbsp;<span
                                                    class="price">{{ $cart->product->sale_price }}</span>.00</td>
                                            <form action="{{ route('cart.update', $cart->id) }}" method="post"
                                                class="update-cart">
                                                <td class="product_quantity"><label>Quantity</label>
                                                    @csrf
                                                    @method('PUT')
                                                    <input name="product_qty" min="1" max="100"
                                                        value="{{ $cart->product_qty }}" type="number"
                                                        class="quantity">
                                                </td>
                                            </form>
                                            <td class="product_total">
                                                BDT&nbsp;<span
                                                    class="total_price">{{ $cart->product->sale_price * $cart->product_qty }}</span>.00
                                                <div class="d-none">
                                                    {{ $price += $cart->product->sale_price * $cart->product_qty }}
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6">
                                                <div>No Product in your cart</div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--coupon code area start-->
            <div class="coupon_area">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        {{-- <div class="coupon_code left">
                                <h3>Coupon</h3>
                                <div class="coupon_inner">
                                    <p>Enter your coupon code if you have one.</p>
                                    <input placeholder="Coupon code" type="text">
                                    <button type="submit">Apply coupon</button>
                                </div>
                            </div> --}}
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code right">
                            <h3>Cart Totals</h3>
                            <div class="coupon_inner">
                                <div class="cart_subtotal">
                                    <p>Subtotal</p>
                                    <p class="cart_amount">
                                        BDT&nbsp;<span class="gross_price">{{ $price }}</span>.00
                                    </p>
                                </div>
                                <div class="cart_subtotal ">
                                    <p>Shipping</p>
                                    <p class="cart_amount"><span>Flat Rate:</span>
                                        BDT&nbsp;<span class="shipping_cost">120</span>.00 {{-- TODO: Add shiipping cost dinamically --}}
                                    </p>
                                </div>
                                <a href="#">Calculate shipping</a>

                                <div class="cart_subtotal">
                                    <p>Total</p>
                                    <p class="cart_amount">
                                        BDT&nbsp;<span class="net_price">{{ $price + 120 }}</span>.00
                                        {{-- TODO: Add shiipping cost dinamically --}}
                                    </p>
                                </div>
                                <div class="checkout_btn">
                                    <a href="{{ route('checkout') }}">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--coupon code area end-->
        </div>
    </div>
    @push('sctipts')
        <script>
            $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf_token').attr('content')
                    }
                })
            });
            $('.quantity').on("keyup change", function() {
                $(this).closest('tr').find('.total_price').html(parseInt($(this).val()) * parseInt($(this).closest('tr')
                    .find('.price').html()))
                let gross_price = 0;
                $('.total_price').each(function() {
                    gross_price += parseInt($(this).html());
                });
                $('.gross_price').html(gross_price);
                $('.net_price').html(gross_price + parseInt($('.shipping_cost').html()));
                console.log($(this).closest('tr').find('.update-cart'));
                $(this).closest('tr').find('.update-cart').submit();

            })

            $('.update-cart').submit(function(e) {
                e.preventDefault();
                let formData = new FormData(this);
                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (res) => {

                    }
                })
            })
        </script>
    @endpush
    <!--shopping cart area end -->
</x-front-app-layout>
