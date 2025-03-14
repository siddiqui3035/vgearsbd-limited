<x-app-layout>
    <div class="row">
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                @if ($usersCount != null)
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">{{ $usersCount }}</h3>
                                <p class="text-success ml-2 mb-0 font-weight-medium">+{{ number_format($percentUser, 2) }}%</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-success ">
                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total user</h6>
                </div>
                @else
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">$12.34</h3>
                                <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-success ">
                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total user</h6>
                </div>
                @endif
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                @if ($brandsCount != null)
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">{{ $brandsCount }}</h3>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-success">
                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Brand count</h6>
                </div>
                @else
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">$17.34</h3>
                                <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-success">
                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Revenue current</h6>
                </div>
                @endif
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                @if ($categoryCount != null)
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">{{ $categoryCount }}</h3>
                                {{-- <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p> --}}
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-success">
                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total category</h6>
                </div>
                @else
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">$12.34</h3>
                                <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-success">
                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total category</h6>
                </div>
                @endif
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                @if ($blogCount != null)
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">{{ $blogCount }}</h3>
                                {{-- <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p> --}}
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-success ">
                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total blog</h6>
                </div>
                @else
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">$31.53</h3>
                                <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-success ">
                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total blog</h6>
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        {{-- <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Transaction History</h4>
                    <canvas id="transaction-history" class="transaction-chart"></canvas>
                    <div
                        class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                        <div class="text-md-center text-xl-left">
                            <h6 class="mb-1">Transfer to Paypal</h6>
                            <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                        </div>
                        <div
                            class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                            <h6 class="font-weight-bold mb-0">$236</h6>
                        </div>
                    </div>
                    <div
                        class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                        <div class="text-md-center text-xl-left">
                            <h6 class="mb-1">Tranfer to Stripe</h6>
                            <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                        </div>
                        <div
                            class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                            <h6 class="font-weight-bold mb-0">$593</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                        <h4 class="card-title mb-1">Open Projects</h4>
                        <p class="text-muted mb-1">Your data status</p>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="preview-list">
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-primary">
                                            <i class="mdi mdi-file-document"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h6 class="preview-subject">Admin dashboard design</h6>
                                            <p class="text-muted mb-0">Broadcast web app mockup</p>
                                        </div>
                                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                            <p class="text-muted">15 minutes ago</p>
                                            <p class="text-muted mb-0">30 tasks, 5 issues </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-success">
                                            <i class="mdi mdi-cloud-download"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h6 class="preview-subject">Wordpress Development</h6>
                                            <p class="text-muted mb-0">Upload new design</p>
                                        </div>
                                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                            <p class="text-muted">1 hour ago</p>
                                            <p class="text-muted mb-0">23 tasks, 5 issues </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-info">
                                            <i class="mdi mdi-clock"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h6 class="preview-subject">Project meeting</h6>
                                            <p class="text-muted mb-0">New project discussion</p>
                                        </div>
                                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                            <p class="text-muted">35 minutes ago</p>
                                            <p class="text-muted mb-0">15 tasks, 2 issues</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-danger">
                                            <i class="mdi mdi-email-open"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h6 class="preview-subject">Broadcast Mail</h6>
                                            <p class="text-muted mb-0">Sent release details to team</p>
                                        </div>
                                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                            <p class="text-muted">55 minutes ago</p>
                                            <p class="text-muted mb-0">35 tasks, 7 issues </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-warning">
                                            <i class="mdi mdi-chart-pie"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h6 class="preview-subject">UI Design</h6>
                                            <p class="text-muted mb-0">New application planning</p>
                                        </div>
                                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                            <p class="text-muted">50 minutes ago</p>
                                            <p class="text-muted mb-0">27 tasks, 4 issues </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h5>Revenue</h5>
                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h2 class="mb-0">$32123</h2>
                                <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                            </div>
                            <h6 class="text-muted font-weight-normal">11.38% Since last month</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                            <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h5>Sales</h5>
                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h2 class="mb-0">$45850</h2>
                                <p class="text-success ml-2 mb-0 font-weight-medium">+8.3%</p>
                            </div>
                            <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                            <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h5>Purchase</h5>
                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h2 class="mb-0">$2039</h2>
                                <p class="text-danger ml-2 mb-0 font-weight-medium">-2.1% </p>
                            </div>
                            <h6 class="text-muted font-weight-normal">2.27% Since last month</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                            <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Order Status</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="form-check form-check-muted m-0">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                            </label>
                                        </div>
                                    </th>
                                    <th> Client Name </th>
                                    <th> Order No </th>
                                    <th> Product Cost </th>
                                    <th> Project </th>
                                    <th> Payment Mode </th>
                                    <th> Start Date </th>
                                    <th> Payment Status </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-muted m-0">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="{{ asset('admin-asset/assets/images/faces/face1.jpg')}}" alt="image" />
                                        <span class="pl-2">Henry Klein</span>
                                    </td>
                                    <td> 02312 </td>
                                    <td> $14,500 </td>
                                    <td> Dashboard </td>
                                    <td> Credit card </td>
                                    <td> 04 Dec 2019 </td>
                                    <td>
                                        <div class="badge badge-outline-success">Approved</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-muted m-0">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="{{ asset('admin-asset/assets/images/faces/face2.jpg')}}" alt="image" />
                                        <span class="pl-2">Estella Bryan</span>
                                    </td>
                                    <td> 02312 </td>
                                    <td> $14,500 </td>
                                    <td> Website </td>
                                    <td> Cash on delivered </td>
                                    <td> 04 Dec 2019 </td>
                                    <td>
                                        <div class="badge badge-outline-warning">Pending</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-muted m-0">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="{{ asset('admin-asset/assets/images/faces/face5.jpg')}}" alt="image" />
                                        <span class="pl-2">Lucy Abbott</span>
                                    </td>
                                    <td> 02312 </td>
                                    <td> $14,500 </td>
                                    <td> App design </td>
                                    <td> Credit card </td>
                                    <td> 04 Dec 2019 </td>
                                    <td>
                                        <div class="badge badge-outline-danger">Rejected</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-muted m-0">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="assets/images/faces/face3.jpg" alt="image" />
                                        <span class="pl-2">Peter Gill</span>
                                    </td>
                                    <td> 02312 </td>
                                    <td> $14,500 </td>
                                    <td> Development </td>
                                    <td> Online Payment </td>
                                    <td> 04 Dec 2019 </td>
                                    <td>
                                        <div class="badge badge-outline-success">Approved</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-muted m-0">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="{{ asset('admin-asset/assets/images/faces/face4.jpg')}}" alt="image" />
                                        <span class="pl-2">Sallie Reyes</span>
                                    </td>
                                    <td> 02312 </td>
                                    <td> $14,500 </td>
                                    <td> Website </td>
                                    <td> Credit card </td>
                                    <td> 04 Dec 2019 </td>
                                    <td>
                                        <div class="badge badge-outline-success">Approved</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="row">
        <div class="col-md-6 col-xl-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                        <h4 class="card-title">Messages</h4>
                        <a href="{{ route('contacts.index') }}" class="text-muted mb-1 small">View all</a>
                    </div>
                    <div class="preview-list">
                        @forelse ($messages as $message )
                        <div class="preview-item border-bottom">
                            <div class="preview-item-content d-flex flex-grow">
                                <div class="flex-grow">
                                    <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                        <h6 class="preview-subject">{{ $message->name }}</h6>
                                        <p class="text-muted text-small">{{ $message->created_at->diffForHumans() }}</p>
                                    </div>
                                    <p class="text-muted">{{ $message->subject }}</p>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                                <img src="{{ asset('admin-asset/assets/images/faces/face8.jpg')}}" alt="image"
                                    class="rounded-circle" />
                            </div>
                            <div class="preview-item-content d-flex flex-grow">
                                <div class="flex-grow">
                                    <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                        <h6 class="preview-subject">Luella Mills</h6>
                                        <p class="text-muted text-small">10 Minutes Ago</p>
                                    </div>
                                    <p class="text-muted">Well, it seems to be working now.</p>
                                </div>
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Blog Slide</h4>

                    <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel"
                    id="owl-carousel-basic">
                    @forelse ($blogs as $blog)
                    {{-- @dump($blog) --}}
                        <div class="item">
                            <a href="{{ route('blog.index') }}">
                                <img src="{{ asset($blog->image)}}" style="height: 350px!important" alt="">
                            </a>
                        </div>
                        @empty
                        <div class="item">
                            <a href="{{ route('blog.index') }}">
                                <img src="{{ asset('admin-asset/assets/images/dashboard/Rectangle.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{ route('blog.index') }}">
                                <img src="{{ asset('admin-asset/assets/images/dashboard/Img_5.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{ route('blog.index') }}">
                                <img src="{{ asset('admin-asset/assets/images/dashboard/img_6.jpg')}}" alt="">
                            </a>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-xl-4 grid-margin stretch-card">
            {{-- <div class="card">
                <div class="card-body">
                    <h4 class="card-title">To do list</h4>
                    <div class="add-items d-flex">
                        <input type="text" class="form-control todo-list-input"
                            placeholder="enter task..">
                        <button class="add btn btn-primary todo-list-add-btn">Add</button>
                    </div>
                    <div class="list-wrapper">
                        <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
                            <li>
                                <div class="form-check form-check-primary">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox"> Create invoice
                                    </label>
                                </div>
                                <i class="remove mdi mdi-close-box"></i>
                            </li>
                            <li>
                                <div class="form-check form-check-primary">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox"> Meeting with Alita
                                    </label>
                                </div>
                                <i class="remove mdi mdi-close-box"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check form-check-primary">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked> Prepare for
                                        presentation </label>
                                </div>
                                <i class="remove mdi mdi-close-box"></i>
                            </li>
                            <li>
                                <div class="form-check form-check-primary">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox"> Plan weekend outing
                                    </label>
                                </div>
                                <i class="remove mdi mdi-close-box"></i>
                            </li>
                            <li>
                                <div class="form-check form-check-primary">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox"> Pick up kids from
                                        school </label>
                                </div>
                                <i class="remove mdi mdi-close-box"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    {{-- <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Visitors by Countries</h4>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <i class="flag-icon flag-icon-us"></i>
                                            </td>
                                            <td>USA</td>
                                            <td class="text-right"> 1500 </td>
                                            <td class="text-right font-weight-medium"> 56.35% </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="flag-icon flag-icon-de"></i>
                                            </td>
                                            <td>Germany</td>
                                            <td class="text-right"> 800 </td>
                                            <td class="text-right font-weight-medium"> 33.25% </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="flag-icon flag-icon-au"></i>
                                            </td>
                                            <td>Australia</td>
                                            <td class="text-right"> 760 </td>
                                            <td class="text-right font-weight-medium"> 15.45% </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="flag-icon flag-icon-gb"></i>
                                            </td>
                                            <td>United Kingdom</td>
                                            <td class="text-right"> 450 </td>
                                            <td class="text-right font-weight-medium"> 25.00% </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="flag-icon flag-icon-ro"></i>
                                            </td>
                                            <td>Romania</td>
                                            <td class="text-right"> 620 </td>
                                            <td class="text-right font-weight-medium"> 10.25% </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="flag-icon flag-icon-br"></i>
                                            </td>
                                            <td>Brasil</td>
                                            <td class="text-right"> 230 </td>
                                            <td class="text-right font-weight-medium"> 75.00% </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div id="audience-map" class="vector-map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</x-app-layout>
