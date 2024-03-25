<x-app-layout>
    {{-- <div class="card" style="width: 24rem;">
        @foreach ($orders as $order)
        <div class="card-body mt-4">
            <img src="{{ asset($order->product->thumble) }}" width="100" alt="Product Thumbnail">
            <h5 class="card-title mt-4"><span>Order Number: &nbsp;</span>{{ $order->order_number }}</h5>
            <h5 class="card-title mb-2"><span>User Name:</span> &nbsp; {{ $order->user->fullname }}</h5>
            <h5 class="card-title mb-2"><span>User Phone:</span> &nbsp; {{ $order->user->phone }}</h5>
            <h5 class="card-title mb-2"><span>Product Name:</span> &nbsp; {{ $order->product->name }}</h5>
            <h5 class="card-title mb-2"><span>Product Qty:</span> &nbsp; {{ $order->product_qty }}
                {{ $order->product->salesUnit->name }}</h5>
            <h5 class="card-title mb-2"><span>Purchase Price:</span> &nbsp; BDT.{{ $order->product_price }} </h5>
            <h5 class="card-title mb-2"><span>Total Price:</span> &nbsp; BDT.{{ $order->total_price }} </h5>
            <h5 class="card-title mb-2 uppercase"><span>Payment Method:</span> &nbsp; BDT.{{ $order->payment_method }}
            </h5>
            <p class="card-text"><span>Status:</span>
                &nbsp;
                <label class="{{ $order->status == 'pending' ? 'text-danger' : ($order->status == 'processing' ? 'text-primary' : ($order->status == 'shipped' ? 'text-info' : 'text-success')) }}">
                    {{ ucfirst($order->status) }}
                </label>
            </p>
        </div>
        @endforeach

        <div class="card-body">
            <a href="{{ route('admin.orders.index') }}" class="card-link">Back To List</a>
        </div>
    </div> --}}
    <div class="row">
        {{-- @foreach ($orders as $order) --}}
            <div class="col-sm-6 mt-4">
                <div class="card" style="width: 24rem;">
                    <div class="card-body">
                        <img src="{{ asset($order->product->thumble) }}" width="150px" alt="Product Thumbnail">
                        <h5 class="card-title mt-4"><span>Order Number: &nbsp;</span>{{ $order->order_number }}</h5>
                        <h5 class="card-title mb-2"><span>User Name:</span> &nbsp; {{ $order->user->fullname }}</h5>
                        <h5 class="card-title mb-2"><span>User Phone:</span> &nbsp; {{ $order->user->phone }}</h5>
                        <h5 class="card-title mb-2"><span>Category Name:</span> &nbsp; {{ $order->product->category->name }}</h5>
                        <h5 class="card-title mb-2"><span>Brand Name:</span> &nbsp; {{ $order->product->brand->name }}</h5>
                        <h5 class="card-title mb-2"><span>Product Name:</span> &nbsp; {{ $order->product->name }}</h5>
                        <h5 class="card-title mb-2"><span>Purchase Price:</span> &nbsp; BDT.{{ $order->product->purchase_price }}</h5>
                        <h5 class="card-title mb-2"><span>Purchase Unit:</span> &nbsp; {{ $order->product->purchaseUnit->name }}</h5>
                        <h5 class="card-title mb-2"><span>Sale Price:</span> &nbsp; BDT.{{ $order->product->sale_price }}</h5>
                        <h5 class="card-title mb-2"><span>Sale Unit:</span> &nbsp; {{ $order->product->salesUnit->name }}</h5>
                        <h5 class="card-title mb-2"><span>Order Product Qty:</span> &nbsp; {{ $order->product_qty }}
                            {{ $order->product->salesUnit->name }}</h5>
                        <h5 class="card-title mb-2"><span>Purchase Price:</span> &nbsp; BDT.{{ $order->product_price }}
                        </h5>
                        <h5 class="card-title mb-2"><span>Total Price:</span> &nbsp; BDT.{{ $order->total_price }} </h5>
                        <h5 class="card-title mb-2 uppercase"><span>Payment Method:</span> &nbsp;
                            {{ $order->payment_method == 'cod' ? 'Cash on delivery' : 'others' }}
                        </h5>
                        <p class="card-text"><span>Status:</span>
                            &nbsp;
                            <label
                                class="{{ $order->status == 'pending' ? 'text-danger' : ($order->status == 'processing' ? 'text-primary' : ($order->status == 'shipped' ? 'text-info' : 'text-success')) }}">
                                {{ ucfirst($order->status) }}
                            </label>
                        </p>
                    </div>
                </div>
            </div>
        {{-- @endforeach --}}
        {{-- <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div> --}}
    </div>
</x-app-layout>
