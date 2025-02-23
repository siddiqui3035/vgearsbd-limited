<x-app-layout>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Create Blog</h4>
                    <a class="menu-icon" href="{{ route('blogs.index') }}">
                        <i class="mdi mdi-format-list-bulleted"><span>Back to list</span></i>

                    </a>
                </div>
                <form class="forms-sample" action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Category</label>
                        <input type="text" name="category" class="form-control" id="category" placeholder="Enter acategory">
                        <p class="text-danger mt-2">{{ $errors->first('category') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter a title">
                        <p class="text-danger mt-2">{{ $errors->first('title') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Short Details</label>
                        <input type="text" name="short_description" class="form-control" id="short_description" placeholder="Enter a short details">
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Details</label>
                        <textarea class="form-control" name="long_description" id="long_description" rows="4"></textarea>
                        <p class="text-danger mt-2">{{ $errors->first('long_description') }}</p>
                    </div>
                    <label>Image upload</label>
                    <div class="form-group">
                        <input type="file" name="image" id="image">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
