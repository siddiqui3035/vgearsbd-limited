<x-app-layout>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Create Product Discount</h4>
                    <a class="menu-icon" href="{{ route('discounts.index') }}">
                        <i class="mdi mdi-format-list-bulleted"><span>Back to list</span></i>

                    </a>
                </div>
                <form class="forms-sample" action="{{ route('discounts.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Discount Type</label>
                        <input type="text" name="type" class="form-control" id="type" placeholder="Enter a discount type">
                        <p class="text-danger mt-2">{{ $errors->first('type') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Discount Amount</label>
                        <input type="text" name="amount" class="form-control"
                            id="amount" placeholder="Enter a discount amount">
                            <p class="text-danger mt-2">{{ $errors->first('amount') }}</p>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('discounts.index') }}" class="btn btn-dark">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
