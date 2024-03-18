<x-app-layout>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Edit About Vgear</h4>
                    <a class="menu-icon" href="{{ route('us.index') }}">
                        <i class="mdi mdi-format-list-bulleted"><span>Back to list</span></i>

                    </a>
                </div>
                <form class="forms-sample" action="{{ route('us.update', $about->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail3">Title</label>
                        <input type="text" name="title" value="{{ $about->title }}" class="form-control"
                            id="title" placeholder="Enter a title">
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Details</label>
                        <textarea class="form-control text-white" name="details" id="details" rows="4">
                            {{ $about->details }}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="">Select a status</option>

                            <option value="0" @isset($about) {{ $about->status == 0 ? "selected=true" : "" }} @endisset>
                                Active
                            </option>
                            <option value="1" @isset($about) {{ $about->status ? "selected=true" : "" }} @endisset>
                                Inactive
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Serial No</label>
                        <input type="number" name="serial" value="{{ $about->serial }}" class="form-control"
                            id="serial" value="{{ $about->serial }}" placeholder="Enter a serial number">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
