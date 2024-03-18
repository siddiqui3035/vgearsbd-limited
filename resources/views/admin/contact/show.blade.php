<x-app-layout>
    <div class="card" style="width: 24rem;">
        {{-- <img class="card-img-top text-center" src="{{ asset($contact->image) }}" style="width: 380px!important;height:300px!important;" alt="Card image cap"> --}}
        <div class="card-body">
            <h5 class="card-title"><span>Name: &nbsp;</span>{{ $contact->name }}</h5>
            <h5 class="card-title mb-2"><span>Email:</span> &nbsp; {{ $contact->email }}</h5>
            <h5 class="card-title mb-2"><span>Subject:</span> &nbsp; {{ $contact->subject }}</h5>
            <p class="card-text"><span>Status:</span> &nbsp; <label class="{{ $contact->status == 0 ? 'text-success' : 'text-danger' }}">{{ $contact->status == 0 ? 'Active' : 'Inactive' }}</label></p>
            <h5 class="card-title mb-2"><span>Message:</span> &nbsp; {{ $contact->message }}</h5>
        </div>

        <div class="card-body">
            <a href="{{ route('contacts.index') }}" class="card-link">Back To List</a>
        </div>
    </div>
</x-app-layout>
