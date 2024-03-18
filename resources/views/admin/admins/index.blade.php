<x-app-layout>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Admins List</h4>
                    {{-- <a class="menu-icon" href="{{ route('users.create') }}">
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
                                <th> Name </th>
                                <th> Image </th>
                                <th> Email </th>
                                <th> Phone </th>
                                <th> Status </th>
                                {{-- <th class="text-center"> Action </th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($admins as $admin)
                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td> {{ $admin->first_name }} {{ $admin->last_name }} </td>
                                    <td>
                                        <img class="mx-auto" width="60" src="{{ isset($admin->image) ? asset($admin->image) : asset('admin-asset/assets/images/faces-clipart/pic-4.png')  }}"
                                        alt="image" />
                                    </td>
                                    <td> {{ $admin->email }} </td>
                                    <td> {{ $admin->phone }} </td>
                                    <td>
                                        <a class="status-change menu-icon" href="{{ route('admins.status', $admin->id) }}" data-confirm="Are you sure to change this?">
                                            <label class="{{ $admin->status == 0 ? 'text-success' : 'text-danger' }}">
                                                {{ $admin->status == 0 ? 'Active' : 'Inactive' }}
                                            </label>
                                        </a>
                                    </td>
                                    {{-- <td class="text-center">
                                        <a class="menu-icon" href="{{ route('users.edit', $user->id) }}">
                                            <i class="mdi mdi-speedometer text-success"></i>
                                        </a>
                                        <a class="menu-icon" href="{{ route('users.show', $user->id) }}">
                                            <i class="mdi mdi-eye"></i>
                                        </a>
                                        <a class="menu-icon delete-row text-danger" href="{{ route('users.destroy', $user->id) }}" data-confirm="Are you sure to delete this?">
                                            <i class="mdi mdi-delete"></i>
                                        </a>
                                    </td> --}}
                                </tr>
                            @empty
                                <tr>
                                    <td> 2 </td>
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a class="menu-icon" href="#"><i class="mdi mdi-delete-variant"></i></a>
                                        <a class="menu-icon" href="#"><i class="mdi mdi-table-edit"></i></a>
                                        <a class="menu-icon" href="#"><i class="mdi mdi-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a class="menu-icon" href="#"><i class="mdi mdi-delete-variant"></i></a>
                                        <a class="menu-icon" href="#"><i class="mdi mdi-table-edit"></i></a>
                                        <a class="menu-icon" href="#"><i class="mdi mdi-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a class="menu-icon" href="#"><i class="mdi mdi-delete-variant"></i></a>
                                        <a class="menu-icon" href="#"><i class="mdi mdi-table-edit"></i></a>
                                        <a class="menu-icon" href="#"><i class="mdi mdi-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a class="menu-icon" href="#"><i class="mdi mdi-delete-variant"></i></a>
                                        <a class="menu-icon" href="#"><i class="mdi mdi-table-edit"></i></a>
                                        <a class="menu-icon" href="#"><i class="mdi mdi-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a class="menu-icon" href="#"><i class="mdi mdi-delete-variant"></i></a>
                                        <a class="menu-icon" href="#"><i class="mdi mdi-table-edit"></i></a>
                                        <a class="menu-icon" href="#"><i class="mdi mdi-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a class="menu-icon" href="#"><i class="mdi mdi-delete-variant"></i></a>
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
