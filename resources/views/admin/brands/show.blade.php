<x-app-layout>
    <div class="card" style="width: 24rem;">
        <img class="card-img-top" src="{{ asset($brand->image) }}" width="100" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><span>Title One: &nbsp;</span>{{ $brand->name }}</h5>
            <p class="card-text"><span>Status:</span>
                &nbsp;
                <label class="{{ $brand->status == 0 ? 'text-success' : 'text-danger' }}">
                    {{ $brand->status == 0 ? 'Active' : 'Inactive' }}
                </label>
            </p>
        </div>

        <div class="card-body">
            <a href="{{ route('brands.edit', $brand->id) }}" class="card-link">Edit Brand</a>
            <a href="{{ route('brands.index') }}" class="card-link">Back To List</a>
        </div>
    </div>
</x-app-layout>
