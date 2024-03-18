<x-app-layout>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Product category list</h4>
                    <div>
                        <a class="menu-icon ms-2" href="{{ route('categories.create') }}">
                            <i class="mdi mdi-library-plus"><span>Create Category</span></i>
                        </a>
                        <a class="menu-icon px-2" href="{{ route('admin.subcategories.index') }}">
                            <i class="mdi mdi-format-list-bulleted"><span>View subcategory list</span></i>
                        </a>
                    </div>
                </div>
                </p>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S.L</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($categories as $category)
                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td> {{ $category->name }} </td>
                                    <td class="{{ $category->status == 0 ? 'text-success' : 'text-danger' }}">
                                        {{ $category->status == 0 ? 'Active' : 'Inactive' }} </td>
                                    <td class="text-center">
                                        <a class="menu-icon" href="{{ route('categories.edit', $category->id) }}">
                                            <i class="mdi mdi-speedometer text-success"></i>
                                        </a>
                                        {{-- <a class="menu-icon" href="{{ route('categories.show', $category->id) }}">
                                            <i class="mdi mdi-eye"></i>
                                        </a> --}}
                                        <a class="menu-icon delete-row text-danger"
                                            href="{{ route('categories.destroy', $category->id) }}"
                                            data-confirm="Are you sure to delete this?">
                                            <i class="mdi mdi-delete"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td> 2 </td>
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
