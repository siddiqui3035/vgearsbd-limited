<x-app-layout>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Product List</h4>
                    <a class="menu-icon" href="{{ route('products.create') }}">
                        <i class="mdi mdi-library-plus"><span>Create Product</span></i>

                    </a>
                </div>
                </p>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> S.L </th>
                                <th> Image </th>
                                <th> Category </th>
                                <th> Brand </th>
                                <th> Name </th>
                                <th> Purchase Price </th>
                                <th> Sale Price </th>
                                <th> Status </th>
                                <th class="text-center"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($products as $product)
                            {{-- @dump($product) --}}
                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td>
                                        <img class="mx-auto" width="60" src="{{ asset($product->thumble) }}"
                                            alt="image" />
                                    </td>
                                    <td> {{ $product->category->name }} </td>
                                    <td> {{ $product->brand->name }} </td>
                                    <td> {{ $product->name }} </td>
                                    <td> {{ $product->purchase_price }} </td>
                                    <td> {{ $product->sale_price }} </td>
                                    <td class="{{ $product->status == 0 ? 'text-success' : 'text-danger' }}"> {{ $product->status == 0 ? 'Active' : 'Inactive' }} </td>
                                    <td class="text-center">
                                        <a class="menu-icon" href="{{ route('products.edit', $product->id) }}">
                                            <i class="mdi mdi-speedometer text-success"></i>
                                        </a>
                                        <a class="menu-icon" href="{{ route('products.show', $product->id) }}">
                                            <i class="mdi mdi-eye"></i>
                                        </a>
                                        <a class="menu-icon delete-row text-danger" href="{{ route('products.destroy', $product->id) }}" data-confirm="Are you sure to delete this?">
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
