<x-app-layout>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Subscriber List</h4>
                </div>
                </p>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S.L</th>
                                <th class="text-center">Email</th>
                                <th class="text-right">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($subscribes as $subscribe)
                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td class="text-center"> {{ $subscribe->email }} </td>
                                    <td class="text-right">
                                        <a class="status-change menu-icon" href="{{ route('subscribes.status', $subscribe->id) }}" data-confirm="Are you sure to change this?">
                                            <label class="{{ $subscribe->status == 0 ? 'text-success' : 'text-danger' }}">
                                                {{ $subscribe->status == 0 ? 'Active' : 'Inactive' }}
                                            </label>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td> 2 </td>
                                    <td class="text-center"> Messsy Adam1 </td>

                                    <td class="text-right">
                                        <a class="menu-icon" href="#"><i class="mdi mdi-delete-variant"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <td class="text-center"> Messsy Adam </td>

                                    <td class="text-right">
                                        <a class="menu-icon" href="#"><i class="mdi mdi-delete-variant"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <td class="text-center"> Messsy Adam </td>

                                    <td class="text-right">
                                        <a class="menu-icon" href="#"><i class="mdi mdi-delete-variant"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <td class="text-center"> Messsy Adam </td>

                                    <td class="text-right">
                                        <a class="menu-icon" href="#"><i class="mdi mdi-delete-variant"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <td class="text-center"> Messsy Adam </td>

                                    <td class="text-right">
                                        <a class="menu-icon" href="#"><i class="mdi mdi-delete-variant"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <td class="text-center"> Messsy Adam </td>

                                    <td class="text-right">
                                        <a class="menu-icon" href="#"><i class="mdi mdi-delete-variant"></i></a>
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
