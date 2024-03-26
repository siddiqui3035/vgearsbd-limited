<x-app-layout>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Create Product</h4>
                    <a class="menu-icon" href="{{ route('products.index') }}">
                        <i class="mdi mdi-format-list-bulleted"><span>Back to list</span></i>

                    </a>
                </div>
                <form class="forms-sample" action="{{ route('products.update', $product->id) }}" method="post"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Brand</label>
                        <select class="form-control" name="brand_id">
                            <option value="">Select Brand</option>
                            @foreach ($brands as $id => $value)
                                <option value="{{ $id }}"
                                    @isset($product) {{ $product->brand->name ? 'selected=true' : '' }} @endisset>
                                    {{ $value }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Category</label>
                        <select class="form-control" name="category_id">
                            <option value="">Select Category</option>
                            @foreach ($categories as $id => $value)
                                <option value="{{ $id }}"
                                    @isset($product) {{ $product->category->name ? 'selected=true' : '' }} @endisset>
                                    {{ $value }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Product Name</label>
                        <input type="text" name="name" class="form-control" id="name"
                            value="{{ $product->name }}" placeholder="Enter a product name">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Product Code</label>
                        <input type="number" name="product_code" class="form-control" id="product_code"
                            value="{{ $product->product_code }}" placeholder="Enter a product code">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Product Quantity</label>
                        <input type="number" name="qty" class="form-control" id="qty"
                            value="{{ $product->qty }}" placeholder="Enter a product quantity">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Product Unit</label>
                        <select class="form-control" name="unit_id" id="units">
                            <option value="">Select Product Unit</option>
                            @foreach ($units as $id => $value)
                                <option value="{{ $id }}" {{ $id == $product->unit_id ? 'selected' : '' }}>
                                    {{ $value }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Purchase Unit</label>
                        <select id="purchase-units" class="form-control" name="purchase_unit_id">
                            @foreach ($units as $id => $value)
                                <option value="{{ $id }}" {{ $id == $product->purchase_unit_id ? 'selected' : '' }}>
                                    {{ $value }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Sale Unit</label>
                        <select id="sale-units" class="form-control" name="sale_unit_id">
                            @foreach ($units as $id => $value)
                                <option value="{{ $id }}" {{ $id == $product->sale_unit_id ? 'selected' : '' }}>
                                    {{ $value }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Packaging Type</label>
                        <select class="form-control" id="packaging_type" name="packaging_type">
                            <option value="">Select packaging type</option>
                            <option value="0"
                                @isset($product) {{ $product->status == 0 ? 'selected=true' : '' }} @endisset>
                                Container
                            </option>
                            <option value="1"
                                @isset($product) {{ $product->status == 1 ? 'selected=true' : '' }} @endisset>
                                Can
                            </option>
                            <option value="2"
                                @isset($product) {{ $product->status == 2 ? 'selected=true' : '' }} @endisset>
                                Bottol
                            </option>
                            <option value="3"
                                @isset($product) {{ $product->status == 3 ? 'selected=true' : '' }} @endisset>
                                Others
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Product Purchase Price</label>
                        <input type="number" name="purchase_price" class="form-control" id="purchase_price"
                            value="{{ $product->purchase_price }}" placeholder="Enter a product purchase">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Product Sale Price</label>
                        <input type="number" name="sale_price" class="form-control" id="sale_price"
                            value="{{ $product->sale_price }}" placeholder="Enter a product purchase">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="">Select a status</option>
                            <option value="0"
                                @isset($product) {{ $product->status == 0 ? 'selected=true' : '' }} @endisset>
                                Active
                            </option>
                            <option value="1"
                                @isset($product) {{ $product->status ? 'selected=true' : '' }} @endisset>
                                Inactive
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Product Details</label>
                        <textarea class="form-control" name="details" id="details" cols="30" rows="10">{{ $product->details }}</textarea>
                    </div>
                    <label>Thamble upload</label>
                    <div class="form-group">
                        <input type="file" name="thumble" id="thumble">
                    </div>
                    <label>Image upload</label>
                    <div class="form-group">
                        <input type="file" name="images[]" id="images" multiple>
                        <div id="image-holder" class="d-flex align-content-between"></div>
                    </div>

                    @isset($product)
                        {{-- <div class="container mx-auto px-8 py-16"> --}}
                        <label class="block text-base text-gray-700 py-2" for="duration">
                            Already Saved Images
                        </label>
                        <div class="row" id="deleted-images">
                            <div class="col">
                                <div class="box">
                                    <div class="row recipe__instructions">
                                        <div class="my-3 min-w-lg-350">
                                            <div>
                                                @foreach ($product->images as $image)
                                                    <div class="img-wraps">
                                                        <img src="{{ asset($image) }}" width="100" height="180"
                                                            alt="Sheep" id="images" class="images mt-2 mr-2">
                                                        <span id="cross" class="cross cursor-pointer closes">
                                                            <i class=" text-danger" onclick="removeImage(this)"
                                                            data-src="{{ explode(env('APP_URL') . '/', $image)[0] }}"
                                                            aria-hidden="true">X</i>
                                                        </span>
                                                    </div>
                                                @endforeach
                                                {{-- @foreach ($product->images as $image)
                                                    <div class="img-wraps">
                                                        <img src="{{ asset($image) }}" width="100" height="180"
                                                            alt="Sheep" id="images" class="images mt-2 mr-2">
                                                        <span class="cross cursor-pointer closes">
                                                            <i class=" text-danger" onclick="removeImage(this)"
                                                                data-src="{{ env('APP_URL') . '/' . $image }}"
                                                                aria-hidden="true">X</i>
                                                        </span>
                                                    </div>
                                                @endforeach --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endisset
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('products.index') }}" class="btn btn-dark">Cancel</a>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#units').on('change', function() {
                    var idPurchaseUnit = this.value;
                    $("#purchase-units").html('');
                    $("#sale-units").html('');
                    $.ajax({
                        url: "{{ url('admin/products/fetch-purchase-units') }}",
                        type: "POST",
                        data: {
                            purchase_unit_id: idPurchaseUnit,
                            _token: '{{ csrf_token() }}'
                        },
                        dataType: 'json',
                        success: function(result) {
                            $('#purchase-units').html(
                                '<option value="">Select Purchase Unit</option>');
                            $('#sale-units').html('<option value="">Select Sale Unit</option>');

                            $.each(result.purcahseUnits, function(key, value) {
                                $("#purchase-units").append('<option value="' + value
                                    .id + '">' + value.name + '</option>');

                                $("#sale-units").append('<option value="' + value
                                    .id + '">' + value.name + '</option>');
                            });
                        }
                    });
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $("#images").on('change', function() {
                    //Get count of selected files
                    var countFiles = $(this)[0].files.length;
                    var imgPath = $(this)[0].value;
                    var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
                    var image_holder = $("#image-holder");
                    image_holder.empty();
                    if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
                        if (typeof(FileReader) != "undefined") {
                            //loop for each file selected for uploaded.
                            for (var i = 0; i < countFiles; i++) {
                                var reader = new FileReader();
                                reader.onload = function(e) {
                                    $("<img />", {
                                        "src": e.target.result,
                                        "class": "thumb-image mr-2 mt-2",
                                        "height": "50px",
                                    }).appendTo(image_holder);
                                }
                                image_holder.show();
                                reader.readAsDataURL($(this)[0].files[i]);
                            }
                        } else {
                            alert("This browser does not support FileReader.");
                        }
                    } else {
                        alert("Pls select only images");
                    }
                });
            });

            // miltiple image remove part
            let del = document.querySelectorAll('.cross');
            let image = document.querySelectorAll('.images');
            del.forEach(function(x) {
                x.addEventListener('click', function(e) {
                    x.classList.add('d-none')
                    x.previousElementSibling.remove()
                })
            });

            function removeImage(event) {
                $("#deleted-images").append('<input id="images" value="' + $(event).data("src") +
                    '" type="hidden" name="deleted_images[]" multiple/>')
            }
            // let crosses = document.querySelectorAll('.cross');
            // let images = document.querySelectorAll('.images');

            // crosses.forEach(function(cross) {
            //     cross.addEventListener('click', function(e) {
            //         cross.parentElement
            //     .remove(); // Remove the parent element which contains both the image and the cross
            //         removeImage(cross.getAttribute(
            //         'data-src')); // Pass the data-src attribute value to removeImage function
            //     });
            // });

            // function removeImage(src) {
            //     $("#deleted-images").append('<input value="' + src + '" type="hidden" name="deleted_images[]" multiple/>');
            // }
        </script>
    @endpush
</x-app-layout>
