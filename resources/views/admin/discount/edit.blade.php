<x-app-layout>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Edit product discount</h4>
                    <a class="menu-icon" href="{{ route('discounts.index') }}">
                        <i class="mdi mdi-format-list-bulleted"><span>Back to list</span></i>

                    </a>
                </div>
                <form class="forms-sample" action="{{ route('discounts.update', $discount->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Discount Type</label>
                        <input type="text" name="type" value="{{ $discount->type }}" class="form-control"
                            id="type" placeholder="Enter a discount type">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Discount Amount</label>
                        <input type="text" name="amount" value="{{ $discount->amount }}" class="form-control"
                            id="amount" placeholder="Enter a discount amount">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="">Select a status</option>

                            <option value="0" @isset($discount) {{ $discount->status == 0 ? "selected=true" : "" }} @endisset>
                                Active
                            </option>
                            <option value="1" @isset($discount) {{ $discount->status ? "selected=true" : "" }} @endisset>
                                Inactive
                            </option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('discounts.index') }}" class="btn btn-dark">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
