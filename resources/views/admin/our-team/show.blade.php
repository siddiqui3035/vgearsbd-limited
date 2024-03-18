<x-app-layout>
    <div class="card" style="width: 24rem;">
        <img class="card-img-top text-center" src="{{ asset($ourTeam->image) }}" style="width: 380px!important;height:300px!important;" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><span>Name: &nbsp;</span>{{ $ourTeam->name }}</h5>
            <h5 class="card-title mb-2"><span>Degnigation:</span> &nbsp; {{ $ourTeam->degnigation }}</h5>
            <h5 class="card-title mb-2"><span>Details:</span> &nbsp; {{ $ourTeam->details }}</h5>
            <p class="card-text"><span>Status:</span> &nbsp; <label class="{{ $ourTeam->status == 0 ? 'text-success' : 'text-danger' }}">{{ $ourTeam->status == 0 ? 'Active' : 'Inactive' }}</label> </p>
        </div>

        <div class="card-body">
            <a href="{{ route('teams.edit', $ourTeam->id) }}" class="card-link">Edit Team Member</a>
            <a href="{{ route('teams.index') }}" class="card-link">Back To List</a>
        </div>
    </div>
</x-app-layout>
