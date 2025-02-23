<x-app-layout>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Edit product category</h4>
                    <a class="menu-icon" href="{{ route('categories.index') }}">
                        <i class="mdi mdi-format-list-bulleted"><span>Back to list</span></i>

                    </a>
                </div>
                <form class="forms-sample" action="{{ route('categories.update', $category->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="exampleSelectGender">Category</label>
                        <select class="form-control" id="parent_id" name="parent_id">
                            <option value="">Select Category</option>
                            @foreach ($parentCategories as $parentCategory)
                                <option
                                    @isset($category){{ $category->parent_id == $parentCategory->id ? 'selected=true' : '' }}@endisset
                                    value="{{ $parentCategory->id }}">
                                    {{ $parentCategory->name }}
                                </option>
                            @endforeach
                        </select>
                        <p class="text-danger mt-2">{{ $errors->first('parent_id') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Name</label>
                        <input type="text" name="name" value="{{ $category->name }}" class="form-control"
                            id="short_name" placeholder="Enter a category name">
                            <p class="text-danger mt-2">{{ $errors->first('name') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="">Select a status</option>

                            <option value="0" @isset($category) {{ $category->status == 0 ? "selected=true" : "" }} @endisset>
                                Active
                            </option>
                            <option value="1" @isset($category) {{ $category->status ? "selected=true" : "" }} @endisset>
                                Inactive
                            </option>
                        </select>
                        <p class="text-danger mt-2">{{ $errors->first('status') }}</p>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('categories.index') }}" class="btn btn-dark">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
