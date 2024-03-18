<x-app-layout>
    <section class="content">
        {{-- <div class="row">
            <div class="col">
                <div class="box">
                    <div class="row">
                        <div class="d-flex justify-content-between">
                            <div class="box-header with-border">
                                <a href="{{ route('products.edit', $product->id) }}"
                                    class="ml-2 waves-effect waves-light btn btn-info btn-flat mb-5">Edit</a>
                            </div>
                            <div class="box-header with-border">
                                <a href="{{ route('products.index') }}"
                                    class="waves-effect waves-light btn btn-success btn-flat mb-5">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="row">
            <div class="col">
                <div class="box">
                    <div class="my-3 min-w-lg-350">
                        <div>
                            <h2 class="mb-md section-heading-1 p-2">{{ $product->name }}</h2>
                            @foreach ($product->images as $image)
                                <img src="{{ asset($image) }}" height="400" alt="Sheep"
                                    class="mt-2 mr-2">
                            @endforeach
                        </div>

                    </div>
                    <section class="recipe__ingredients col-12 mt-md col-lg-12 mt-6 mb-4">
                        <div class="list">
                            <h2 class="pb-xxs pt-xxs list-item list-item--separator mt-2">Product Details</h2>
                            <div class="pb-xxs pt-xxs list-item list-item--separator mt-2">Category: &nbsp;{{ $product->category->name }}</div>
                            <div class="pb-xxs pt-xxs list-item list-item--separator mt-2">Brand: &nbsp;{{ $product->brand->name }}</div>
                            <div class="pb-xxs pt-xxs list-item list-item--separator mt-2">Name: &nbsp;{{ $product->name }}</div>
                            <div class="pb-xxs pt-xxs list-item list-item--separator mt-2">Product Code: &nbsp;{{ $product->product_code }}</div>
                            <div class="pb-xxs pt-xxs list-item list-item--separator mt-2">Qutenty: &nbsp;{{ $product->qty }} {{ $product->purchaseUnit->name }}</div>
                            <div class="pb-xxs pt-xxs list-item list-item--separator mt-2">
                                Product Unit: {{ $product->productUnit->name }}
                            </div>
                            <div class="pb-xxs pt-xxs list-item list-item--separator mt-2">
                                Purchase Unit: {{ $product->purchaseUnit->name }}
                            </div>
                            <div class="pb-xxs pt-xxs list-item list-item--separator mt-2">
                                Sale Unit: {{ $product->salesUnit->name }}
                            </div>
                            <div class="pb-xxs pt-xxs list-item list-item--separator mt-2">
                                Purchase Price: {{ $product->purchase_price }}
                            </div>
                            <div class="pb-xxs pt-xxs list-item list-item--separator mt-2">
                                Sale Price: {{ $product->sale_price }}
                            </div>
                            <div class="pb-xxs pt-xxs list-item list-item--separator mt-2">
                                Details: <p class="text-break"> {{ $product->details }}</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <div>
                <a href="{{ route('products.edit', $product->id) }}" class="card-link">Edit product</a>
            </div>
            <div>
                <a href="{{ route('products.index') }}" class="card-link">Back To List</a>
            </div>
        </div>
    </section>
</x-app-layout>
