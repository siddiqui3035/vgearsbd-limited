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
                        <p class="text-danger mt-2">{{ $errors->first('name') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Degnigation</label>
                        <input type="text" name="degnigation" class="form-control" id="degnigation" placeholder="Enter menber degnigation">
                        <p class="text-danger mt-2">{{ $errors->first('degnigation') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Details</label>
                        <textarea class="form-control" name="details" id="details" rows="4"></textarea>
                        <p class="text-danger mt-2">{{ $errors->first('details') }}</p>
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
