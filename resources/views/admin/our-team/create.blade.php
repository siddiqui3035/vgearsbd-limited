<x-app-layout>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Create Team</h4>
                    <a class="menu-icon" href="{{ route('teams.index') }}">
                        <i class="mdi mdi-format-list-bulleted"><span>Back to list</span></i>

                    </a>
                </div>
                <form class="forms-sample" action="{{ route('teams.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter member's name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Degnigation</label>
                        <input type="text" name="degnigation" class="form-control" id="degnigation" placeholder="Enter menber degnigation">
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Details</label>
                        <textarea class="form-control" name="details" id="details" rows="4"></textarea>
                    </div>
                    <label>Image upload</label>
                    <div class="form-group">
                        <input type="file" name="image" id="image">
                        {{-- <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled=""
                                placeholder="Upload Image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div> --}}
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
