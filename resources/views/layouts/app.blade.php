<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>VGEARSBD Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin-asset/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-asset/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('admin-asset/assets/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-asset/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-asset/assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-asset/assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('admin-asset/assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('logo/logo-mini.png') }}" />

    <style>
        .img-wraps {
            position: relative;
            display: inline-block;
            font-size: 0;
        }

        .img-wraps .closes {
            position: absolute;
            top: 10px;
            right: 8px;
            z-index: 100;
            /* background-color: #FFF; */
            padding: 4px 3px;
            color: #000;
            font-weight: bold;
            cursor: pointer;
            text-align: center;
            font-size: 22px;
            line-height: 10px;
            border-radius: 50%;
            /* border:1px solid red; */
        }
    </style>
    @stack('styles')
</head>

<body>
    @include('sweetalert::alert')
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.particles.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('admin.particles.navbar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    {{ $slot }}
                </div>

                <form id="delete-form" action="" method="post">
                    @csrf
                    <input id="method" type="hidden" name="_method" value="DELETE">
                </form>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                @include('admin.particles.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('admin-asset/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('admin-asset/assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin-asset/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('admin-asset/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('admin-asset/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('admin-asset/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('admin-asset/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin-asset/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin-asset/assets/js/misc.js') }}"></script>
    <script src="{{ asset('admin-asset/assets/js/settings.js') }}"></script>
    <script src="{{ asset('admin-asset/assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('admin-asset/assets/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->

    <script>
        $(document).on("click", ".delete-row", function(e) {
            e.preventDefault(); //for <a> teg action stop
            let confirmStr = "Are you Sure??";
            if ($(this).attr("data-confirm")) {
                confirmStr = $(this).attr("data-confirm");
            }
            if (confirm(confirmStr)) {
                let href = $(this).attr("href");
                $("#delete-form").attr("action", href);
                $("#delete-form").submit();
            }
        });

        $(document).on("click", ".status-change", function(e) {
            e.preventDefault();
            let confirmStr = "Are You Sure?"
            if ($(this).attr("data-confirm")) {
                confirmStr = $(this).attr("data-confirm");
            }
            if (confirm(confirmStr)) {
                let href = $(this).attr("href");
                $("#method").attr("value", "PUT");
                $("#delete-form").attr("action", href);
                $("#delete-form").submit();
            }
        });
    </script>

    @stack('scripts')
</body>

</html>
