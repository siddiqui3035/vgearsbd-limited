<x-app-layout>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Create Product Unit</h4>
                    <a class="menu-icon" href="{{ route('units.index') }}">
                        <i class="mdi mdi-format-list-bulleted"><span>Back to list</span></i>

                    </a>
                </div>
                <form class="forms-sample" action="{{ route('units.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="Enter a unit name">
                        <p class="text-danger mt-2">{{ $errors->first('name') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Short name</label>
                        <input type="text" name="short_name" class="form-control" id="short_name"
                            placeholder="Enter a unit short name">
                        <p class="text-danger mt-2">{{ $errors->first('short_name') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Unit type</label>
                        <select class="form-control" id="unit_type" name="unit_type">
                            <option value="">Select a unit type</option>
                            <option value="kilogram">
                                Kilogram
                            </option>
                            <option value="meter">
                                Meter
                            </option>
                            <option value="piece">
                                Piece
                            </option>
                        </select>
                        <p class="text-danger mt-2">{{ $errors->first('unit_type') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Operator</label>
                        <select class="form-control" id="operator" name="operator">
                            <option value="">Select a operator</option>
                            <option value="*">
                                *
                            </option>
                            <option value="/">
                                /
                            </option>
                        </select>
                        <p class="text-danger mt-2">{{ $errors->first('operator') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Operator value</label>
                        <input type="number" name="operator_value" class="form-control" id="operator_value"
                            placeholder="Enter a unit operator value">
                        <p class="text-danger mt-2">{{ $errors->first('operator_value') }}</p>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('units.index') }}" class="btn btn-dark">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
