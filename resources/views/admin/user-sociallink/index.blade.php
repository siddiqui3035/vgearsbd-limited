<x-app-layout>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">User Social Link</h4>
                    {{-- <a class="menu-icon" href="{{ route('us.create') }}">
                        <i class="mdi mdi-library-plus"><span>Create</span></i>

                    </a> --}}
                </div>
                {{-- <p class="card-description"> Add class <code>.table-bordered</code> --}}
                </p>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> S.L </th>
                                <th> Social Type </th>
                                <th> Social Link </th>
                                <th class="text-center"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($socialLinks as $socialLink)
                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td> {{ $socialLink->type }} </td>
                                    <td> {{ $socialLink->link }} </td>
                                    <td class="text-center">
                                        <a class="menu-icon delete-row text-danger" href="{{ route('sociallinks.destroy', $socialLink->id) }}" data-confirm="Are you sure to delete this?">
                                            <i class="mdi mdi-delete"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td> 2 </td>
                                    <th> Address </th>
                                    <th> City </th>
                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <th> Address </th>
                                    <th> City </th>
                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <th> Address </th>
                                    <th> City </th>
                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <th> Address </th>
                                    <th> City </th>
                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <th> Address </th>
                                    <th> City </th>
                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <th> Address </th>
                                    <th> City </th>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
