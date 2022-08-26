<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>e-musisi | Welcome</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="{{ asset('img/bkdlogo.png') }}" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('own/css/bootstrap.min.css') }}" />
    <!-- site css -->
    <link rel="stylesheet" href="{{ asset('own/style.css') }}" />
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('own/css/responsive.css') }}" />
    <!-- color css -->
    <link rel="stylesheet" href="{{ asset('own/css/colors.css') }}" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="{{ asset('own/css/bootstrap-select.css') }}" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="{{ asset('own/css/perfect-scrollbar.css') }}" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('own/css/custom.css') }}" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="dashboard dashboard_1">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            @include('login.layout.side')
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                @include('login.layout.top')
                <!-- end topbar -->
                <!-- dashboard inner -->
                <div class="midde_cont">
                    @yield('container')
                    <!-- footer -->
                    <div class="container-fluid">
                        <div class="footer">
                            <p>Copyright © {{ date('Y') }} Create with heart from BKPSDM Pessel. Wish u Luck.<br><br>
                                Official Website: <a href="https://bkpsdm.pesisirselatankab.go.id/"><strong>BKPSDM PESISIR SELATAN</strong></a>
                            </p>
                        </div>
                    </div>

                </div>
                <!-- end dashboard inner -->
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('own/js/jquery.min.js') }}"></script>
    <script src="{{ asset('own/js/popper.min.js') }}"></script>
    <script src="{{ asset('own/js/bootstrap.min.js') }}"></script>
    <!-- wow animation -->
    <script src="{{ asset('own/js/animate.js') }}"></script>
    <!-- select country -->
    <script src="{{ asset('own/js/bootstrap-select.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('own/js/owl.carousel.js') }}"></script>
    <!-- chart js -->
    <script src="{{ asset('own/js/Chart.min.js') }}"></script>
    <script src="{{ asset('own/js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('own/js/utils.js') }}"></script>
    <script src="{{ asset('own/js/analyser.js') }}"></script>
    <!-- nice scrollbar -->
    <script src="{{ asset('own/js/perfect-scrollbar.min.js') }}"></script>
    <script>
        var ps = new PerfectScrollbar('#sidebar');
    </script>
    <!-- custom js -->
    <script src="{{ asset('own/js/custom.js') }}"></script>
    <script src="{{ asset('own/js/chart_custom_style1.js') }}"></script>
</body>

</html>