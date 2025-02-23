<x-app-layout>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Edit Blog</h4>
                    <a class="menu-icon" href="{{ route('blogs.index') }}">
                        <i class="mdi mdi-format-list-bulleted"><span>Back to list</span></i>
                    </a>
                </div>
                <form class="forms-sample" action="{{ route('blogs.update', $blog->id) }}" method="post"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Category</label>
                        <input type="text" name="category" value="{{ $blog->category }}" class="form-control"
                            id="category" placeholder="Enter acategory">
                        <p class="text-danger mt-2">{{ $errors->first('category') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Title</label>
                        <input type="text" name="title" value="{{ $blog->title }}" class="form-control"
                            id="title" placeholder="Enter a title">
                        <p class="text-danger mt-2">{{ $errors->first('title') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Short Details</label>
                        <input type="text" name="short_description" value="{{ $blog->short_description }}"
                            class="form-control" id="short_description" placeholder="Enter a short details">
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Details</label>
                        <textarea class="form-control" name="long_description" id="long_description" rows="4">
                            {{ $blog->long_description }}
                        </textarea>
                        <p class="text-danger mt-2">{{ $errors->first('long_description') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="">Select a status</option>

                            <option value="0"
                                @isset($blog) {{ $blog->status == 0 ? 'selected=true' : '' }} @endisset>
                                Active
                            </option>
                            <option value="1"
                                @isset($blog) {{ $blog->status ? 'selected=true' : '' }} @endisset>
                                Inactive
                            </option>
                        </select>
                        <p class="text-danger mt-2">{{ $errors->first('status') }}</p>
                    </div>
                    <label>Image upload</label>
                    <div class="form-group">
                        <div class="mb-3">
                            <input type="file" name="image" id="image">
                        </div>
                        <img src="{{ asset($blog->image) }}" alt="" width="60px">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
