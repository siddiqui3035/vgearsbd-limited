<x-app-layout>
    <div class="card" style="width: 24rem;">
        <div class="card-body">
            <h5 class="card-title"><span>Title: &nbsp;</span>{{ $about->title }}</h5>
            <h5 class="card-title mb-2"><span>Details:</span> &nbsp; {{ $about->details }}</h5>
            <h5 class="card-title mb-2"><span>Serial No:</span> &nbsp; {{ $about->serial }}</h5>
            <p class="card-text"><span>Status:</span>
                &nbsp;
                <label class="{{ $about->status == 0 ? 'text-success' : 'text-danger' }}">
                    {{ $about->status == 0 ? 'Active' : 'Inactive' }}
                </label>
            </p>
        </div>

        <div class="card-body">
            <a href="{{ route('us.edit', $about->id) }}" class="card-link">Edit About Us</a>
            <a href="{{ route('us.index') }}" class="card-link">Back To List</a>
        </div>
    </div>
</x-app-layout>
