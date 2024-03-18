<x-app-layout>
    <div class="card" style="width: 24rem;">
        <div class="card-body">
            <h5 class="card-title"><span>Title: &nbsp;</span>{{ $unit->name }}</h5>
            <h5 class="card-title mb-2"><span>Short name:</span> &nbsp; {{ $unit->short_name }}</h5>
            <h5 class="card-title mb-2"><span>Unit type:</span> &nbsp; {{ $unit->unit_type }}</h5>
            <h5 class="card-title mb-2"><span>Operator:</span> &nbsp; {{ $unit->operator }}</h5>
            <h5 class="card-title mb-2"><span>Operator value:</span> &nbsp; {{ $unit->operator_value }}</h5>
            <p class="card-text"><span>Status:</span>
                &nbsp;
                <label class="{{ $unit->status == 0 ? 'text-success' : 'text-danger' }}">
                    {{ $unit->status == 0 ? 'Active' : 'Inactive' }}
                </label>
            </p>
        </div>

        <div class="card-body">
            @if($unit->base_unit == 0)
            <a href="{{ route('units.edit', $unit->id) }}" class="card-link">Edit unit</a>
            @endif
            <a href="{{ route('units.index') }}" class="card-link">Back To List</a>
        </div>
    </div>
</x-app-layout>
