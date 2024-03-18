<x-app-layout>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Product Units List</h4>
                    <a class="menu-icon" href="{{ route('units.create') }}">
                        <i class="mdi mdi-library-plus"><span>Create Unit</span></i>

                    </a>
                </div>
                </p>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> S.L </th>
                                <th> Name </th>
                                <th> Short name </th>
                                <th> Unit type </th>
                                <th> Operator </th>
                                <th> Operator value </th>
                                <th> Status </th>
                                <th class="text-center"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($units as $unit)
                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td> {{ $unit->name }} </td>
                                    <td> {{ $unit->short_name }} </td>
                                    <td> {{ $unit->unit_type }} </td>
                                    <td> {{ $unit->operator }} </td>
                                    <td> {{ $unit->operator_value }} </td>
                                    <td class="{{ $unit->status == 0 ? 'text-success' : 'text-danger' }}"> {{ $unit->status == 0 ? 'Active' : 'Inactive' }} </td>
                                    <td class="text-center">
                                        <a class="menu-icon" href="{{ route('units.edit', $unit->id) }}">
                                            <i class="mdi mdi-speedometer text-success"></i>
                                        </a>
                                        <a class="menu-icon" href="{{ route('units.show', $unit->id) }}">
                                            <i class="mdi mdi-eye"></i>
                                        </a>
                                        <a class="menu-icon delete-row text-danger" href="{{ route('units.destroy', $unit->id) }}" data-confirm="Are you sure to delete this?">
                                            <i class="mdi mdi-delete"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td> 2 </td>
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td>
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
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td>
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
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td>
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
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td>
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
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td>
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
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td> Messsy Adam </td>
                                    <td>
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
