<x-app-layout>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Edit Brand</h4>
                    <a class="menu-icon" href="{{ route('brands.index') }}">
                        <i class="mdi mdi-format-list-bulleted"><span>Back to list</span></i>
                    </a>
                </div>
                <form class="forms-sample" action="{{ route('brands.update', $brand->id) }}" method="post"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" name="name" value="{{ $brand->name }}" class="form-control"
                            id="title_one" placeholder="Enter a brand name">
                            <p class="text-danger mt-2">{{ $errors->first('name') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="">Select a status</option>

                            <option value="0" @isset($brand) {{ $brand->status == 0 ? "selected=true" : "" }} @endisset>
                                Active
                            </option>
                            <option value="1" @isset($brand) {{ $brand->status ? "selected=true" : "" }} @endisset>
                                Inactive
                            </option>
                        </select>
                        <p class="text-danger mt-2">{{ $errors->first('status') }}</p>
                    </div>
                    <label>Image upload</label>
                    <div class="form-group">
                        <div class="mb-3">
                            <input type="file" name="image" id="image">
                            <p class="text-danger mt-2">{{ $errors->first('image') }}</p>
                        </div>
                        <img src="{{ asset($brand->image) }}" alt="" width="60px">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('brands.index') }}" class="btn btn-dark">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
