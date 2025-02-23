<x-app-layout>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Order List</h4>
                    {{-- <a class="menu-icon" href="{{ route('orders.create') }}">
                        <i class="mdi mdi-library-plus"><span>Add Team Member</span></i>

                    </a> --}}
                </div>
                {{-- <p class="card-description"> Add class <code>.table-bordered</code> --}}
                </p>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> S.L </th>
                                <th> Order Number</th>
                                <th> User Name</th>
                                <th> User Phone</th>
                                <th> Product Name</th>
                                <th> Product qty </th>
                                <th> Total proce </th>
                                <th> Payment method </th>
                                <th> Status </th>
                                <th class="text-center"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($orders as $order)
                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td> {{ $order->order_number }} </td>
                                    <td> {{ $order->user->fullname }} </td>
                                    <td> {{ $order->user->phone }} </td>
                                    <td> {{ $order->product->name }} </td>
                                    <td> {{ $order->product_qty }} {{ $order->product->salesUnit->name }} </td>
                                    <td> BDT.{{ $order->total_price }} </td>
                                    <td class="text-uppercase"> {{ $order->payment_method }} </td>
                                    <td
                                        class=" {{ $order->status == 'pending'
                                            ? 'text-danger'
                                            : ($order->status == 'processing'
                                                ? 'text-warning'
                                                : ($order->status == 'shipped'
                                                    ? 'text-info'
                                                    : ($order->status == 'delivered'
                                                        ? 'text-success'
                                                        : ''))) }}">
                                        {{ ucfirst($order->status) }}
                                    </td>
                                    <td class="text-center">
                                        {{-- <a class="menu-icon" href="{{ route('orders.edit', $ourTeam->id) }}">
                                            <i class="mdi mdi-speedometer text-success"></i>
                                        </a> --}}
                                        <a class="menu-icon" href="{{ route('admin.orders.show', $order->id) }}">
                                            <i class="mdi mdi-eye"></i>
                                        </a>
                                        <button type="button" class="btn" data-toggle="modal"
                                            data-target="#myModal{{ $order->id }}">
                                            <a class="" href="#">
                                                <i class="mdi mdi-eye"></i>
                                            </a>
                                        </button>
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
    @if (!empty($order))
        <div class="modal fade" id="myModal{{ $order->id }}" aria-labelledby="myModalLabel{{ $order->id }}"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('update.order.status', $order->id) }}" method="POST">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel{{ $order->id }}">Update status</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="status">New Status:</label>
                                <select name="status" id="status" class="form-control">
                                    @foreach ($statuses as $status)
                                        <option value="{{ $status }}"
                                            {{ $order->status == $status ? 'selected' : '' }}>{{ ucfirst($status) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update Status</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    @endif

</x-app-layout>
