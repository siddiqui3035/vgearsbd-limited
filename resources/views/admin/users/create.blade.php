<x-app-layout>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Create About Vgears</h4>
                    <a class="menu-icon" href="{{ route('us.index') }}">
                        <i class="mdi mdi-format-list-bulleted"><span>Back to list</span></i>
                    </a>
                </div>
                <form class="forms-sample" action="{{ route('us.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter a title">
                        <p class="text-danger mt-2">{{ $errors->first('title') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Serial No</label>
                        <input type="number" name="serial" class="form-control"
                            id="serial" placeholder="Enter a serial number">
                            <p class="text-danger mt-2">{{ $errors->first('serial') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Details</label>
                        <textarea class="form-control" name="details" id="details" rows="4"></textarea>
                        <p class="text-danger mt-2">{{ $errors->first('details') }}</p>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
