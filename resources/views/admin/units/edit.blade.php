<x-app-layout>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Edit product unit</h4>
                    <a class="menu-icon" href="{{ route('units.index') }}">
                        <i class="mdi mdi-format-list-bulleted"><span>Back to list</span></i>

                    </a>
                </div>
                <form class="forms-sample" action="{{ route('units.update', $unit->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" name="name" value="{{ $unit->name }}" class="form-control"
                            id="name" placeholder="Enter a unit name">
                        <p class="text-danger mt-2">{{ $errors->first('name') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Short name</label>
                        <input type="text" name="short_name" value="{{ $unit->short_name }}" class="form-control"
                            id="short_name" placeholder="Enter a unit short name">
                        <p class="text-danger mt-2">{{ $errors->first('short_name') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Unit type</label>
                        <select class="form-control" id="unit_type" name="unit_type">
                            <option value="">Select a unit type</option>
                            <option value="kilogram"
                                @isset($unit) {{ $unit->unit_type == 'kilogram' ? 'selected=true' : '' }}@endisset>
                                Kilogram
                            </option>
                            <option value="meter"
                                @isset($unit) {{ $unit->unit_type == 'meter' ? 'selected=true' : '' }}@endisset>
                                Meter
                            </option>
                            <option value="piece"
                                @isset($unit) {{ $unit->unit_type == 'piece' ? 'selected=true' : '' }}@endisset>
                                Piece
                            </option>
                        </select>
                        <p class="text-danger mt-2">{{ $errors->first('unit_type') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Operator</label>
                        <select class="form-control" id="operator" name="operator">
                            <option value="">Select a operator</option>
                            <option value="*"
                                @isset($unit) {{ $unit->operator == '*' ? 'selected=true' : '' }}@endisset>
                                *
                            </option>
                            <option value="/"
                                @isset($unit) {{ $unit->operator == '/' ? 'selected=true' : '' }}@endisset>
                                /
                            </option>
                        </select>
                        <p class="text-danger mt-2">{{ $errors->first('operator') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Operator value</label>
                        <input type="number" name="operator_value" value="{{ $unit->operator_value }}"
                            class="form-control" id="operator_value" placeholder="Enter a unit operator value">
                        <p class="text-danger mt-2">{{ $errors->first('operator_value') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="">Select a status</option>

                            <option value="0"
                                @isset($unit) {{ $unit->status == 0 ? 'selected=true' : '' }} @endisset>
                                Active
                            </option>
                            <option value="1"
                                @isset($unit) {{ $unit->status == 1 ? 'selected=true' : '' }} @endisset>
                                Inactive
                            </option>
                        </select>
                        <p class="text-danger mt-2">{{ $errors->first('status') }}</p>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('units.index') }}" class="btn btn-dark">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
