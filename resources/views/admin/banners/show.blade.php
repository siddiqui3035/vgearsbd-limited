<x-app-layout>
    <div class="card" style="width: 24rem;">
        <img class="card-img-top" src="{{ asset($banner->image) }}" width="100" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><span>Title One: &nbsp;</span>{{ $banner->title_one }}</h5>
            <h5 class="card-title"><span>Title Two: &nbsp;</span>{{ $banner->title_two }}</h5>
            <h5 class="card-title mb-2"><span>Short Details:</span> &nbsp; {{ $banner->short_details }}</h5>
            <p class="card-text"><span>Status:</span>
                &nbsp;
                <label class="{{ $banner->status == 0 ? 'text-success' : 'text-danger' }}">
                    {{ $banner->status == 0 ? 'Active' : 'Inactive' }}
                </label>
            </p>
        </div>

        <div class="card-body">
            <a href="{{ route('banners.edit', $banner->id) }}" class="card-link">Edit Banner</a>
            <a href="{{ route('banners.index') }}" class="card-link">Back To List</a>
        </div>
    </div>
</x-app-layout>
