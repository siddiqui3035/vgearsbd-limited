<x-app-layout>
    <div class="card" style="width: 24rem;">
        <img class="card-img-top" src="{{ asset($blog->image) }}" width="100" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><span>Name: &nbsp;</span>{{ $blog->title }}</h5>
            <h5 class="card-title mb-2"><span>Category:</span> &nbsp; {{ $blog->category }}</h5>
            <h5 class="card-title mb-2"><span>Short Details:</span> &nbsp; {{ $blog->short_description }}</h5>
            <h5 class="card-title mb-2"><span>Long Details:</span> &nbsp; {{ $blog->long_description }}</h5>
            <p class="card-text"><span>Status:</span>
                &nbsp;
                <label class="{{ $blog->status == 0 ? 'text-success' : 'text-danger' }}">
                    {{ $blog->status == 0 ? 'Active' : 'Inactive' }}
                </label>
            </p>
        </div>

        <div class="card-body">
            <a href="{{ route('blogs.edit', $blog->id) }}" class="card-link">Edit Blog</a>
            <a href="{{ route('blogs.index') }}" class="card-link">Back To List</a>
        </div>
    </div>
</x-app-layout>
