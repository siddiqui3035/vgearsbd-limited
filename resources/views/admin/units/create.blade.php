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
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Short name</label>
                        <input type="text" name="short_name" class="form-control" id="short_name"
                            placeholder="Enter a unit short name">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Unit type</label>
                        {{-- <input type="text" name="unit_type" class="form-control"
                            id="unit_type" placeholder="Enter a unit type"> --}}
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
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Operator</label>
                        {{-- <input type="text" name="operator" class="form-control" id="operator"
                            placeholder="Enter a unit operator"> --}}
                        <select class="form-control" id="operator" name="operator">
                            <option value="">Select a operator</option>
                            <option value="*">
                                *
                            </option>
                            <option value="/">
                                /
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Operator value</label>
                        <input type="number" name="operator_value" class="form-control" id="operator_value"
                            placeholder="Enter a unit operator value">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('units.index') }}" class="btn btn-dark">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>