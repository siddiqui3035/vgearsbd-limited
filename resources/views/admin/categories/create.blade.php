<x-app-layout>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Create Product Category</h4>
                    <a class="menu-icon" href="{{ route('categories.index') }}">
                        <i class="mdi mdi-format-list-bulleted"><span>Back to list</span></i>

                    </a>
                </div>
                <form class="forms-sample" action="{{ route('categories.store') }}" method="post">
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
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="Enter a category name">
                            <p class="text-danger mt-2">{{ $errors->first('name') }}</p>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('categories.index') }}" class="btn btn-dark">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
