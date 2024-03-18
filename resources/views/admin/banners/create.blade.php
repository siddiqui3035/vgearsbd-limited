<x-app-layout>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Create Banner</h4>
                    <a class="menu-icon" href="{{ route('banners.index') }}">
                        <i class="mdi mdi-format-list-bulleted"><span>Back to list</span></i>

                    </a>
                </div>
                <form class="forms-sample" action="{{ route('banners.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail3">Title One</label>
                        <input type="text" name="title_one" class="form-control" id="title_one" placeholder="Enter a title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Title Two</label>
                        <input type="text" name="title_two" class="form-control" id="title_two" placeholder="Enter a title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Short Details</label>
                        <input type="text" name="short_details" class="form-control" id="short_details" placeholder="Enter a short details">
                    </div>
                    <label>Image upload</label>
                    <div class="form-group">
                        <input type="file" name="image" id="image">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('banners.index') }}" class="btn btn-dark">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
