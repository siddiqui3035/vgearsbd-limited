<x-app-layout>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Edit Member's</h4>
                    <a class="menu-icon" href="{{ route('teams.index') }}">
                        <i class="mdi mdi-format-list-bulleted"><span>Back to list</span></i>

                    </a>
                </div>
                <form class="forms-sample" action="{{ route('teams.update', $team->id) }}" method="post"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" name="name" value="{{ $team->name }}" class="form-control"
                            id="name" placeholder="Enter member name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Degnigation</label>
                        <input type="text" name="degnigation" value="{{ $team->degnigation }}" class="form-control"
                            id="degnigation" placeholder="Enter member degnigation">
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Details</label>
                        <textarea class="form-control" name="details" id="details" rows="4">
                            {{ $team->details }}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="">Select a status</option>

                            <option value="0" @isset($team) {{ $team->status == 0 ? "selected=true" : "" }} @endisset>
                                Active
                            </option>
                            <option value="1" @isset($team) {{ $team->status ? "selected=true" : "" }} @endisset>
                                Inactive
                            </option>
                        </select>
                    </div>
                    <label>Image upload</label>
                    <div class="form-group">
                        <div class="mb-3">
                            <input type="file" name="image" id="image">
                        </div>

                        <img src="{{ asset($team->image) }}" alt="" width="60px">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
