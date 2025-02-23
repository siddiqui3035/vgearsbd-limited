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
                <form class="forms-sample" action="{{ route('products.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Brand</label>
                        <select class="form-control" name="brand_id">
                            <option value="">Select Brand</option>
                            @foreach ($brands as $id => $value)
                                <option value="{{ $id }}">{{ $value }}
                                </option>
                            @endforeach
                        </select>
                        <p class="text-danger mt-2">{{ $errors->first('brand_id') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Category</label>
                        <select class="form-control" name="category_id">
                            <option value="">Select Category</option>
                            @foreach ($categories as $id => $value)
                                <option value="{{ $id }}">{{ $value }}
                                </option>
                            @endforeach
                        </select>
                        <p class="text-danger mt-2">{{ $errors->first('category_id') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Product Name</label>
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="Enter a product name">
                            <p class="text-danger mt-2">{{ $errors->first('name') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Product Code</label>
                        <input type="number" name="product_code" class="form-control" id="product_code"
                            placeholder="Enter a product code">
                            <p class="text-danger mt-2">{{ $errors->first('product_code') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Product Quantity</label>
                        <input type="number" name="qty" class="form-control" id="qty"
                            placeholder="Enter a product quantity">
                            <p class="text-danger mt-2">{{ $errors->first('qty') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Product Unit</label>
                        <select class="form-control" name="unit_id" id="units">
                            <option value="">Select Product Unit</option>
                            @foreach ($units as $id => $value)
                                <option value="{{ $id }}">{{ $value }}
                                </option>
                            @endforeach
                        </select>
                        <p class="text-danger mt-2">{{ $errors->first('unit_id') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Purchase Unit</label>
                        <select id="purchase-units" class="form-control" name="purchase_unit_id">
                        </select>
                        <p class="text-danger mt-2">{{ $errors->first('purchase_unit_id') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Sale Unit</label>
                        <select id="sale-units" class="form-control" name="sale_unit_id">
                        </select>
                        <p class="text-danger mt-2">{{ $errors->first('sale_unit_id') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Packaging Type</label>
                        <select class="form-control" id="packaging_type" name="packaging_type">
                            <option value="">Select packaging type</option>
                            <option value="0">
                                Container
                            </option>
                            <option value="1">
                                Can
                            </option>
                            <option value="2">
                                Bottol
                            </option>
                            <option value="3">
                                Others
                            </option>
                        </select>
                        <p class="text-danger mt-2">{{ $errors->first('packaging_type') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Product Purchase Price</label>
                        <input type="number" name="purchase_price" class="form-control" id="purchase_price"
                            placeholder="Enter a product purchase">
                            <p class="text-danger mt-2">{{ $errors->first('purchase_price') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Product Sale Price</label>
                        <input type="number" name="sale_price" class="form-control" id="sale_price"
                            placeholder="Enter a product purchase">
                            <p class="text-danger mt-2">{{ $errors->first('sale_price') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Product Details</label>
                        <textarea class="form-control" name="details" id="details" cols="30" rows="10"></textarea>
                        <p class="text-danger mt-2">{{ $errors->first('details') }}</p>
                    </div>
                    <label>Product Thumble upload</label>
                    <div class="form-group">
                        <input type="file" name="thumble" id="thumble">
                        <p class="text-danger mt-2">{{ $errors->first('thumble') }}</p>
                        <div class="d-flex align-content-between" ></div>
                    </div>
                    <label>Product Image upload</label>
                    <div class="form-group">
                        <input type="file" name="images[]" id="images" multiple>
                        <div id="image-holder" class="d-flex align-content-between mt-4" ></div>
                        <p class="text-danger mt-2">{{ $errors->first('images') }}</p>
                    </div>
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
                // $('#units').on('change', function() {
                //     var idSaleUnit = this.value;
                //     $("#sale-units").html('');
                //     $.ajax({
                //         url: "{{ url('admin/products/fetch-sale-units') }}",
                //         type: "POST",
                //         data: {
                //             sale_unit_id: idSaleUnit,
                //             _token: '{{ csrf_token() }}'
                //         },
                //         dataType: 'json',
                //         success: function(res) {

                //         }
                //     });
                // });
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
                                        "class": "thumb-image mr-2",
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
        </script>
    @endpush
</x-app-layout>
