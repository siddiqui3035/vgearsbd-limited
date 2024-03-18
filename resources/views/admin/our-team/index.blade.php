<x-app-layout>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Team List</h4>
                    <a class="menu-icon" href="{{ route('teams.create') }}">
                        <i class="mdi mdi-library-plus"><span>Add Team Member</span></i>

                    </a>
                </div>
                {{-- <p class="card-description"> Add class <code>.table-bordered</code> --}}
                </p>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> S.L </th>
                                <th> Image </th>
                                <th> Name </th>
                                <th> Degnigation </th>
                                <th> Status </th>
                                <th class="text-center"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($ourTeams as $ourTeam)
                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td>
                                        <img class="mx-auto" width="60" src="{{ asset($ourTeam->image) }}"
                                            alt="image" />
                                    </td>
                                    <td> {{ $ourTeam->name }} </td>
                                    <td> {{ $ourTeam->degnigation }} </td>
                                    <td class="{{ $ourTeam->status == 0 ? 'text-success' : 'text-danger' }}"> {{ $ourTeam->status == 0 ? 'Active' : 'Inactive' }} </td>
                                    <td class="text-center">
                                        <a class="menu-icon" href="{{ route('teams.edit', $ourTeam->id) }}">
                                            <i class="mdi mdi-speedometer text-success"></i>
                                        </a>
                                        <a class="menu-icon" href="{{ route('teams.show', $ourTeam->id) }}">
                                            <i class="mdi mdi-eye"></i>
                                        </a>
                                        <a class="menu-icon delete-row" href="{{ route('teams.destroy', $ourTeam->id) }}" data-confirm="Are you sure to delete this?">
                                            <i class="mdi mdi-delete text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td> 2 </td>
                                    <td> Messsy Adam </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td> $245.30 </td>
                                    <td> July 1, 2015 </td>
                                    <td>
                                        <a class="menu-icon" href="#"><i class="mdi mdi-delete-variant"></i></a>
                                        <a class="menu-icon" href="#"><i class="mdi mdi-table-edit"></i></a>
                                        <a class="menu-icon" href="#"><i class="mdi mdi-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 3 </td>
                                    <td> John Richards </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 90%"
                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td> $138.00 </td>
                                    <td> Apr 12, 2015 </td>
                                    <td>
                                        <a class="menu-icon" href="#"><i class="mdi mdi-delete-variant"></i></a>
                                        <a class="menu-icon" href="#"><i class="mdi mdi-table-edit"></i></a>
                                        <a class="menu-icon" href="#"><i class="mdi mdi-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 4 </td>
                                    <td> Peter Meggik </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td> $ 77.99 </td>
                                    <td> May 15, 2015 </td>
                                    <td>
                                        <a class="menu-icon" href="#"><i class="mdi mdi-delete-variant"></i></a>
                                        <a class="menu-icon" href="#"><i class="mdi mdi-table-edit"></i></a>
                                        <a class="menu-icon" href="#"><i class="mdi mdi-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 5 </td>
                                    <td> Edward </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 35%"
                                                aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td> $ 160.25 </td>
                                    <td> May 03, 2015 </td>
                                    <td>
                                        <a class="menu-icon" href="#"><i class="mdi mdi-delete-variant"></i></a>
                                        <a class="menu-icon" href="#"><i class="mdi mdi-table-edit"></i></a>
                                        <a class="menu-icon" href="#"><i class="mdi mdi-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 6 </td>
                                    <td> John Doe </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 65%"
                                                aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td> $ 123.21 </td>
                                    <td> April 05, 2015 </td>
                                    <td>
                                        <a class="menu-icon" href="#"><i class="mdi mdi-delete-variant"></i></a>
                                        <a class="menu-icon" href="#"><i class="mdi mdi-table-edit"></i></a>
                                        <a class="menu-icon" href="#"><i class="mdi mdi-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 7 </td>
                                    <td> Henry Tom </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar"
                                                style="width: 20%" aria-valuenow="20" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td> $ 150.00 </td>
                                    <td> June 16, 2015 </td>
                                    <td>
                                        <a class="menu-icon" href="#"><i
                                                class="mdi mdi-delete-variant"></i></a>
                                        <a class="menu-icon" href="#"><i class="mdi mdi-table-edit"></i></a>
                                        <a class="menu-icon" href="#"><i class="mdi mdi-eye"></i></a>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
