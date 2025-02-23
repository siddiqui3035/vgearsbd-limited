<x-front-app-layout>
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>My Social Link</h3>
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>My Social Link</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->
    <!-- my account start  -->
    <section class="main_content_area">
        <div class="container">
            <div class="account_dashboard">
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <!-- Nav tabs -->
                        <div class="dashboard_tab_button">
                            <ul role="tablist" class="nav flex-column dashboard-list" id="nav-tab">
                                <li><a href="#dashboard" data-toggle="tab" class="nav-link active">My Social Link</a></li>
                                <li>
                                    <form method="POST" id="logout" action="{{ route('logout') }}">
                                        @csrf
                                    </form>
                                    <a href="#" onclick="$('#logout').submit()" class="nav-link">logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <!-- Tab panes -->
                        <div class="tab-content dashboard_content">
                            <div class="tab-pane fade show active" id="dashboard">
                                <div class="account_login_form">
                                    <h3>Change Address </h3>
                                    <form method="post" action="{{ route('sociallinks.update', $sociallink->id)}}">
                                        @csrf
                                        @method('PUT')
                                        <label>Social type</label>
                                        <input type="text" name="type" value="{{ $sociallink->type }}">
                                        <p class="text-danger mt-2">{{ $errors->first('type') }}</p>
                                        <label>Social link</label>
                                        <input type="text" name="link" value="{{ $sociallink->link }}">
                                        <p class="text-danger mt-2">{{ $errors->first('link') }}</p>
                                        <div class="save_button primary_btn default_button">
                                            <button type="submit">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- my account end   -->
</x-front-app-layout>
